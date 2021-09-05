<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    public function dashboard(){
        // $user_data = DB::table('users')->all();
        $user_table_id = Auth ::user()->id;
        $is_admin = Auth ::user()->admin;
        if($is_admin == 1){
            $result['user'] = DB::table('users');
                // ->leftJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
                // ->where('user_id', $user_table_id)
                // ->get();
            // dd($user);
            return view('admin.dashboard.dashboard', $result);
        }else{
            $result['user'] = DB::table('users')
                ->leftJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
                ->where('user_id', $user_table_id)
                ->get();
            // dd($user);
            return view('dashboard', $result);
        }
    }
    public function dashboard_all_users(){
        $result['users'] = DB::table('users')
            ->leftJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->get();
        return view('admin.users.users', $result);
    }
    public function user_details($id){
        $result['user'] = DB::table('users')
            ->leftJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->where('user_id', $id)
            ->get();
            // dd($result);
        return view('admin.users.user-details', $result);
    }
}

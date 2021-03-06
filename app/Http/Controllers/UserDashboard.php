<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Controller
{
    public function dashboard(){
        $user_table_id = Auth ::user()->id;
        $result['user'] = DB::table('users')
            ->rightJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->where('user_id', $user_table_id)
            ->get();
        // dd($result);
        return view('user.dashboard.dashboard', $result);
    }
    public function Admin_Dashboard(){
        $is_admin = Auth::user()->admin;
        if ($is_admin == 1) {
            $result['user'] = DB::table('users')->get();
            return view('admin.dashboard.dashboard', $result);
        } else {
            return view('auth.login');
        }
    }
    public function dashboard_all_users(){
        $result['users'] = DB::table('users')
            ->rightJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->get();
        return view('admin.users.users', $result);
    }
    public function user_details($id){
        $result['user'] = DB::table('users')
            ->rightJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->where('user_id', $id)
            ->get();
        return view('admin.users.user-details', $result);
    }
    public function user_delete($id){
        DB::table('users')->where('id', $id)->delete();
        DB::table('user_registrations')->where('user_id', $id)->delete();
        return back()->with('message', 'User Deleted Successfully');
    }
    public function user_edit($id){
        $result['user'] = DB::table('users')
            ->rightJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->where('user_id', $id)
            ->get();
            // dd($result);
        return view('admin.users.user-edit', $result);
    }
    public function user_edit_action($id){
        $result['user'] = DB::table('users')
            ->rightJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->where('user_id', $id)
            ->get();
        return view('admin.users.user-edit', $result);
    }
}

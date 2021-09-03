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
        $result['user'] = DB::table('users')
            ->leftJoin('user_registrations', 'users.id', '=', 'user_registrations.user_id')
            ->where('user_id', $user_table_id)
            ->get();
            // dd($user);
        return view('dashboard', $result);
    }
}

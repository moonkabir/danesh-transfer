<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function all_receivers(){
        $creator_id = Auth::user()->id;
        $result['receivers'] = DB::table('receiver')
            ->where('creator_id', $creator_id)
            ->get();
        return view('user.transfer.receiver.all-receiver', $result);
    }
    public function create_receiver(){
        return view('user.transfer.receiver.add-receiver');
    }
    public function create_receiver_post(Request $request){
        DB::table('receiver')->insert([
            'first_name' => $request->post('first_name'),
            'middle_name' => $request->post('middle_name'),
            'last_name' => $request->post('last_name'),
            'phone_number' => $request->post('phone_number'),
            'street_name' => $request->post('street_name'),
            'country' => $request->post('country'),
            'city' => $request->post('city'),
            'phone_number' => $request->post('phone_number'),
            'creator_id' => $request->post('creator_id'),
        ]);
        return redirect('/user/receivers')->with('message', 'User Created Successfully');;
    }
    public function receiver_update($id){
        $result['receiver'] = DB::table('receiver')->where('id', $id)->get();
        return view('user.transfer.receiver.edit-receiver',$result);
    }
    public function receiver_update_action(Request $request, $id)
    {
        DB::table('receiver')->where('id', $id)->update([
            'first_name' => $request->post('first_name'),
            'middle_name' => $request->post('middle_name'),
            'last_name' => $request->post('last_name'),
            'phone_number' => $request->post('phone_number'),
            'street_name' => $request->post('street_name'),
            'country' => $request->post('country'),
            'city' => $request->post('city'),
            'phone_number' => $request->post('phone_number'),
            'creator_id' => $request->post('creator_id'),
        ]);
        return redirect('/user/receivers')->with('message', 'User Updated Successfully');
    }
    public function receiver_delete($id)
    {
        DB::table('receiver')->where('id', $id)->delete();
        return redirect('/user/receivers')->with('message', 'User Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function dashboard_all_currency()
    {
        $result['all_currency'] = DB::table('currency')->get();
        return view('admin.currency.all-currency', $result);
    }
    public function create_currency()
    {
        return view('admin.currency.add-currency');
    }
    public function create_currency_post(Request $request)
    {
        $flag_image = $request->file('flag');
        $flag_image_name = time() . rand() . '.' . $flag_image->extension();
        $flag_image->move(public_path("assets/admin/images/flag"), $flag_image_name);

        DB::table('currency')->insert([
            'name' => $request->post('currency'),
            'code' => $request->post('code'),
            'flag' => $flag_image_name
        ]);
        return redirect('/admin/currency')->with('message', 'Currency Created Successfully');;
    }
    public function currency_update($id)
    {
        $result['currency'] = DB::table('currency')->where('id', $id)->get();
        return view('admin.currency.edit-currency', $result);
    }
    public function currency_update_action(Request $request, $id)
    {
        // $flag_image = $request->file('flag');
        // $flag_image_name = time() . rand() . '.' . $flag_image->extension();
        // $flag_image->move(public_path("assets/front-end/images"), $flag_image_name);

        // $old_image = DB::table('currency')->where('id', $id)->get("flag");
        // echo($old_image->flag);
        // die();
        // return $request;
        if($request->file('flag')){
            $flag_image = $request->file('flag');
            $flag_image_name = time() . rand() . '.' . $flag_image->extension();
            $flag_upload = $flag_image->move(public_path("assets/admin/images/flag"), $flag_image_name);
            if($flag_upload){
                unlink(public_path($request->post('old_currency_flag')));
            }
            DB::table('currency')->where('id', $id)->update([
                'name' => $request->post('name'),
                'code' => $request->post('code'),
                'flag' => $flag_image_name,
            ]);
        }else{
            DB::table('currency')->where('id', $id)->update([
                'name' => $request->post('name'),
                'code' => $request->post('code'),
            ]);
        }
        return redirect('/admin/currency')->with('message', 'Currency Updated Successfully');
    }
    public function currency_delete($id)
    {
        DB::table('currency')->where('id', $id)->delete();
        return redirect('/admin/currency')->with('message', 'Currency Deleted Successfully');
    }
}

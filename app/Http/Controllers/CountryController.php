<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function dashboard_all_country()
    {
        $result['all_country'] = DB::table('country')->get();
        return view('admin.country.all-country', $result);
    }
    public function create_country()
    {
        return view('admin.country.add-country');
    }
    public function create_country_post(Request $request)
    {
        DB::table('country')->insert([
            'name' => $request->post('country_name'),
            'code' => $request->post('country_code'),
        ]);
        return redirect('/admin/country')->with('message', 'Country Created Successfully');;
    }
    public function country_update($id)
    {
        $result['country'] = DB::table('country')->where('id', $id)->get();
        return view('admin.country.edit-country', $result);
    }
    public function country_update_action(Request $request, $id)
    {
        DB::table('country')->where('id', $id)->update([
            'name' => $request->post('country_name'),
            'code' => $request->post('country_code'),
        ]);
        return redirect('/admin/country')->with('message', 'Country Updated Successfully');
    }
    public function country_delete($id)
    {
        DB::table('country')->where('id', $id)->delete();
        return redirect('/admin/country')->with('message', 'Country Deleted Successfully');
    }
}

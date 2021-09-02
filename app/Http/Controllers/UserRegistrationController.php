<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRegistration;
// use Intervention\Image\ImageManagerStatic as Image;

class UserRegistrationController extends Controller
{
    public function login(){
        return view('front-end.user.login');
    }
    public function registration(){
        return view('front-end.user.registration');
    }
    public function form_one(){
        return view('front-end.user.form-one');
    }
    public function form_one_post(Request $request){
        $request->validate([
            'email' => ['required', 'regex:/\S+@\S+\.\S+/'],
            'password' => 'required'
        ]);
        $user = new userRegistration;
        $email = $request->post('email');
        $c_email = $request->post('c_email');
        $password = $request->post('password');
        $c_password = $request->post('c_password');
        if($email != $c_email){
            return redirect('form-one')->with('error', "Email Does not match");
        }else if($password != $c_password) {
            return redirect('form-one')->with('error', "Password Does not match");
        }else{
            $user->email = $email;
            $user->password = $password;
            $user->save();
            return redirect('form-two/')->with('id', $user->id);
        }
    }
    public function form_two(){
        return view('front-end.user.form-two');
    }
    public function form_two_post(Request $request){
        $request->validate([
            // 'title' => ['regex:/^[a-zA-Z .]+$/'],
            // 'fname' => ['required', 'regex:/^[a-zA-Z .]+$/'],
            // 'mname' => ['regex:/^[a-zA-Z .]+$/'],
            // 'lname' => ['required','regex:/^[a-zA-Z .]+$/'],
            // 'phno' => ['required', 'regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/'],
            // 'phno_2' => [ 'regex:/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/'],
            // 'address' => ['regex:/^[#.0-9a-zA-Z\s,-]+$/']
        ]);
        $user_id = $request->post('id');
        $update = userRegistration::where('id', $user_id)->first();
        if($user_id){
            $update->sender_id = $request->post('sender_id');
            $update->title = $request->post('title');
            $update->fname = $request->post('fname');
            $update->mname = $request->post('mname');
            $update->lname = $request->post('lname');
            $update->phno = $request->post('phno');
            $update->phno_2 = $request->post('phno_2');
            $update->address = $request->post('address');
        }
        $update->save();
        return redirect('form-three')->with('id', $update->id);
    }

    public function form_three(){
        return view('front-end.user.form-three');
    }
    public function form_three_post(Request $request){
        $request->validate([
            'bdate' => ['required', 'regex:/^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(18|19|20)\d{2}$/'],
            'id_type' => ['required', 'regex:/(aus_driver_lic|passport)/'],
            'occupation' => ['required', 'regex:/^[a-z A-Z]+$/'],
            'country_of_birth' => ['required', 'regex:/^[a-z A-Z]+$/'],
            'Nationality' => ['required', 'regex:/^[a-z A-Z]+$/']
        ]);
        if($request->post('id_type')== "aus_driver_lic"){
            $request->validate([
                'aus_driver_id_number' => ['required', 'regex:/^[0-9]+$/'],
                'aus_driver_issuing_jurisdictions' => ['required', 'regex:/^[a-zA-Z]+$/'],
                'aus_driver_expiry' => ['required']
            ]);
        }else if($request->post('id_type') == "passport"){
            $request->validate([
                'passport_no' => ['required', 'regex:/^[a-z0-9A-Z]+$/'],
                'passport_issuing_date' => ['required'],
                'passport_issuing_jurisdictions' => ['required', 'regex:/^[a-zA-Z]+$/'],
                'passport_expiry' => ['required']
            ]);
        }
        $user_id = $request->post('id');
        $update = userRegistration::where('id', $user_id)->first();
        // dd($update);
        if ($user_id) {
            if($request->post('aus_driver_id_number') != $request->post('c_aus_driver_id_number')){
                return redirect('form-three')->with('error', "Australia Driver Id Does not match")->with('id', $update->id);
            }else if($request->post('passport_no') != $request->post('c_passport_no')){
                return redirect('form-three')->with('error', "Passport Number Does not match")->with('id', $update->id);
            }else if($request->post('id_type')){
                return redirect('form-three')->with('error', "ID Type Required")->with('id', $update->id);
            }else{
                $update->bdate = $request->post('bdate');
                $update->id_type = $request->post('id_type');
                $update->aus_driver_id_number = $request->post('aus_driver_id_number');
                $update->aus_driver_issuing_jurisdictions = $request->post('aus_driver_issuing_jurisdictions');
                $update->aus_driver_expiry = $request->post('aus_driver_expiry');
                $update->passport_no = $request->post('passport_no');
                $update->passport_issuing_date = $request->post('passport_issuing_date');
                $update->passport_issuing_jurisdictions = $request->post('passport_issuing_jurisdictions');
                $update->passport_expiry = $request->post('passport_expiry');
                $update->occupation = $request->post('occupation');
                $update->country_of_birth = $request->post('country_of_birth');
                $update->Nationality = $request->post('Nationality');
                $update->save();
                return redirect('form-four')->with('id', $update->id)->with('id_type', $request->post('id_type'));
            }
        }
    }

    public function form_four(){
        return view('front-end.user.form-four');
    }
    public function form_four_post(Request $request){
        if ($request->post('id_type') == "aus_driver_lic") {
            $request->validate([
                'aus_driver_license_front' => ['required'],
                'aus_driver_license_back' => ['required']
            ]);
        } else if ($request->post('id_type') == "passport") {
            $request->validate([
                'passport_image' => ['required']
            ]);
        }
        $user_id = $request->post('id');
        $user_id_type = $request->post('id_type');
        $update = userRegistration::where('id', $user_id)->first();
        if ($user_id) {
            if($user_id_type == 'aus_driver_lic') {
                $aus_driver_image_front = $request->file('aus_driver_license_front');
                $aus_driver_image_name_front = time() . rand() . '.' . $aus_driver_image_front->extension();
                $aus_driver_image_front->move(public_path("assets/front-end/images"), $aus_driver_image_name_front);
                $aus_driver_image_back = $request->file('aus_driver_license_back');
                $aus_driver_image_name_back = time() . rand() . '.' . $aus_driver_image_back->extension();
                $aus_driver_image_back->move(public_path("assets/front-end/images"), $aus_driver_image_name_back);
                $update->aus_driver_license_front = $aus_driver_image_name_front;
                $update->aus_driver_license_back = $aus_driver_image_name_back;
            }else{
                $passport_image = $request->file('passport_image');
                $passport_image_name = time() . rand() . '.' . $passport_image->extension();
                $passport_image->move(public_path("assets/front-end/images"), $passport_image_name);
                $update->passport_image = $passport_image_name;
            }
        }
        $update->save();
        return redirect('/')->with('success', "Registration Success");
    }
}

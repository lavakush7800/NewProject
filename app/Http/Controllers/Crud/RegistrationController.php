<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Crud\Registration;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration');
    }
    public function get(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $mobile=$request->input('mobile');
        $address=$request->input('address');
       
        // Log::info($name);
        // Log::info($email);
        // Log::info($password);
        // Log::info($mobile);
        // Log::info($address);

        $data=Registration::get($name,$email,$password,$mobile,$address);
    }

    public function store(){
         $data = Registration::store();

        return view('registration_show', compact('data'));
    }
    
    public function edit(Request $request){
        $id=$request->input('id');
        $data = Registration::edit(($id));
        return view('registration_edit', compact('data'));
    }

    public function update(Request $request){
        $id = $request->id;
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'mobile'=>$request->mobile,
            'address'=>$request->address
        ];
        $data = Registration::update($id,$data);
        return redirect(registration_show);
    }

    // public function delete(){
    //     return redirect('registration');
    // }
}

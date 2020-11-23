<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\RegistrationController;
use App\Model\Registration as Model;
use Illuminate\Support\Facades\Log;

class Registration{
    public static function get($name,$email,$password,$mobile,$address):bool{
        $data = Model::create(['name' => $name, 'email' => $email,'password' => $password,'mobile' => $mobile,'address' => $address]);
        if($data){
            return true;
        }else{
            return false;
        }
    }

    public static function store(){
        $data = Model::all();
        return $data;
    }


    public static function edit(Request $request):bool{
        $id=$request->input('id');
        $data = Model::where('id',$id)->select('id','name','email','password','mobile','address')->get();
        if($data){
            return true;
        }else{
            return false;
        }
    }

    public static function update(Request $request):bool{
        $id = $request->input('id');
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'mobile'=>$request->mobile,
            'address'=>$request->address
        ];
        $data = Model::where('id',$id)->update($data);
        if($data){
            return true;
        }else{
            return false;
        }
    }
}
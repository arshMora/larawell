<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Kukuzer;

class loginorsigninController extends Controller
{
    public function registrationUsers(Request $req)
    {
        // $user=new Kukuzer();
        // $user->login=$req->login;
        // $user->password=$req->password;
        // $validation=$req->validate(
        //     [
            
        //     'login'=>'required|min:3|max:30|unique:Kukuzer',
        //     'password'=>'required|min:3|max:30',   
        //     ]);
        // $u=$user->save();
        // if ($u)
        //     return "Successfully";

        $validator=Validator::make($req->all(),
        [
            'login'=>'required|min:5|max:30|unique:registr',
            'password'=>'required|min:5|max:30',
        ]);
        if ($validator->fails())
            return response()->json($validator->errors());
        $user=Kukuzer::create($req->all());
        return response()->json('Successfully');
    }
    public function authorizationUsers(Request $req)
    {
        $validator=Validator::make($req->all(),
        [
            'login'=>'required|min:5|max:30|exists:registr',
            'password' => 'required|exists:registr,password',
            
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());
        
            if($user = Kukuzer::where("password",$req->password)->first())
            if ($req->password == $user->password)
                $user->api_token=str_random(50);
                $user->save();
                return response()->json('Successfuly, api_token:'. $user->api_token);   
    }
    public function Logout(Request $req)
    {
        $user=Kukuzer::where("api_token",$req->api_token)->first();
        if($user && $req->api_token != null)
        {
            $user->api_token=null;
            $user->save();
            return response()->json('Logout');
        }
        return response()->json('Error');
    }
}

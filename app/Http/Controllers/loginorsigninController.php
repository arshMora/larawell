<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kukuzer;

class loginorsigninController extends Controller
{
    public function registrationUsers(Request $req)
    {
        $user=new Kukuzer();
        $user->login=$req->login;
        $user->password=$req->password;
        $validation=$req->validate(
            [
            
            'login'=>'required|min:3|max:30|unique:Kukuzer',
            'password'=>'required|min:3|max:30',   
            ]);
        $u=$user->save();
        if ($u)
            return "Successfully";
    }
    public function authorizationUsers(Request $req)
    {
        $user=Kukuzer::where("login",$req->login)->first();
        $user2=Kukuzer::where("password",$req->password)->first();
        
        $user->login=$req->login;
        $user2->password=$req->password;

        $validation=$req->validate
            (
                $user = User::where("login",$req->login)->first();
                $user2 = User::where("password",$req->password)->first();
            );
        $u=$user->save();
        $u2=$user2->save();
        if ($u && $u2)
            return "Successfully";  
        return "Failing";
    }
}

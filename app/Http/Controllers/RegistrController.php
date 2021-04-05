<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kukuzer;

class RegistrController extends Controller
{
    public function postRegistr(Request $req)
    {
        $user=new Kukuzer();
        $user->login=$req->login;
        $user->password=$req->password;
        $validation=$req->validate(
            [
            'login'=>'required|min:3|max:30',
            'password'=>'required|min:3|max:30',
            ]);
        $u=$user->save();
        if ($u)
            return "Successfully";
    }
    public function autoRegistr(Request $req)
    {
        $user=Kukuzer::where("login",$req->login)->first();
        $user2=Kukuzer::where("password",$req->password)->first();
        $user->login=$req->login;
        $user2->password=$req->password;

        
        $validation=$req->validate
            ([
                'login'=>'required',
                'password'=>'required',
            ]);
        $u=$user->save();
        $u2=$user2->save();
        if ($u && $u2)
            return "Successfully";
    }
}

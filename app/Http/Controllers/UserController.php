<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //ПОЛУЧЕНИЕ ИНФЫ
    public function getUsers()
    {
        $user=User::get();
        return response()->json($user);
    }
    //ОТПРАВЛЯЕТ ДАННЫЕ
    public function postUsers(Request $req)
    {
        $user=new User();

        $user->tower=$req->tower;
        $user->description=$req->description;
        $user->cost=$req->cost;
        $user->login=$req->login;
        $user->password=$req->password;

        $u=$user->save();
        if ($u)
            return "successfully";
    }
    // ОБНОВЛЯЕТ ДАННЫЕ
    public function updateUsers(Request $req)
    {
        $user = User::where("id",$req->id)->first();
        $user->tower=$req->tower;
        $user->description=$req->description;
        $user->cost=$req->cost;
        $user->login=$req->login;
        $user->password=$req->password;

        $user->save();

        return response()->json($user);
    }
 
    
    
}

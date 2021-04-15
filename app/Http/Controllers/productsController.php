<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloons;

class productsController extends Controller
{
    public function getProducts()
    {   
        $user=Bloons::get();
        return response()->json($user);
    }

    public function postProducts(Request $req)
    {
        $user=new Bloons();

        $user->product_name=$req->product_name;
        $user->cost=$req->cost;

        $u=$user->save();
        if ($u)
            return "Successfully";
        return "Failing";
    }

    public function deleteProducts(Request $req)
    {
        $product_name = Bloons::where("product_name", $req->product_name)->first();

        if ($product_name)
        {
            $product_name->delete();
    	    return response()->json("Successfully");
        }
        else
            return response()->json("Failing");
    }
}

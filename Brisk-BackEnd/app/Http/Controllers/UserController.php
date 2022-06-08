<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Restaurant;

class UserController extends Controller{
    

    public function getAllRestaurants($id = null){

        if($id){
            $restaurants=Restaurant::find($id);
            $restaurants=$restaurants ? $restaurants->trade_name : '';
        }else{

            $restaurants= restaurant::all();

        }
        // $restaurants=$restaurants->trade_name;

        return response()->json([
            "restaurants" => $restaurants,
            // "names" => $m,
        ], 200);

    }

    public function signUp(Request $request){

        $user = new User;

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->password = hash("sha256", $request->password);
        $user->dob = $request->dob;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->is_admin = "0";

        $user->save();

        return response()->json([
            "status" => "Success",
        ], 200);

    }

    public function login(Request $request){

        
        $user = User :: where("username",$request->username)->first();
        
        if($user){
        $password = hash("sha256", $request->password);//hashing the entered password by the user
        if($password==$user->password){

            return response()->json([
                "status" => "Welcome!",
                "id" => $user -> user_id,
                "is_admin" => $user->is_admin
                
            ], 200);

            }
        }

        return response()->json([
            "status" => "Wrong Username or Password !",
        ], 200);

    }
}






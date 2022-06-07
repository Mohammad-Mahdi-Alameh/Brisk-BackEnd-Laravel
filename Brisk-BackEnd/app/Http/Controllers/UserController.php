<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function getAllUsers(){


        $users= user::all();

        return response()->json([
            "users" => $users
        ], 200);

    }

    public function signUp(Request $request){

        $user = new user;

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

    // public function login(Request $request){

    //     $user = new User;

    //     $user->username = $request->username;
    //     $user->password = hash("sha256", $request->password);
    //     $user->is_admin = "0";

    //     $user->save();

    //     return response()->json([
    //         "status" => "Success",
    //     ], 200);

    // }




}

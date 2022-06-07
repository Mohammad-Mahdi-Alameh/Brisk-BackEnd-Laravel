<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){

        $users= User::all();

        return response()->json([
            "status" => "Success",
            "users" => $users
        ], 200);

    }
}

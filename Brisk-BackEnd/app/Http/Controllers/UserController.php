<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Review;

class UserController extends Controller
{
    

    public function Restaurants($id = null){

        if($id){
            $restaurants=Restaurant::find($id);
            // $restaurants=$restaurants ? $restaurants->trade_name : '';
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


    public function addReview(Request $request){

        $review = new Review;

        $review->review_text = $request->review_text;
        $review->rating_value = $request->rating_value;
        $review->is_approved = 0;
        $review->users_id =  $request->users_id;
        $review->restaurants_restaurant_id = $request->restaurants_restaurant_id;

       

        $review->save();

        return response()->json([
            "status" => "Success",
        ], 200);

    }

    public function editProfile(Request $request){

        $user = new User;

        $user_id = $request->user_id;
        $user = User::find($user_id);
        $user->username = $request->username;
        $user->password = hash("sha256", $request->password);
        $user->phone = $request->phone;
        
        $user->update();

        return response()->json([
            "status" => "Success",
        ], 200);


    }

    public function getApprovedReviews(Request $request){

        $restaurant_id=$request->restaurants_restaurant_id;
        $matchThese = ["restaurants_restaurant_id" => $restaurant_id , "is_approved" => 1];
        $reviews = Review::where($matchThese)->get();

        return response()->json([
            "status" => "reviews",
        ], 200);

    }




}






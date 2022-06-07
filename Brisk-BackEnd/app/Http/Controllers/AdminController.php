<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Review;

class AdminController extends Controller
{
    public function addRestaurant(Request $request){

        $restaurant = new Restaurant;

        $restaurant->trade_name = $request->trade_name;
        $restaurant->working_hours = $request->working_hours;
        $restaurant->dining_room_capacity = $request->dining_room_capacity;
        $restaurant->drivethrough_availability = $request->drivethrough_availability;
        $restaurant->delivery_availability = $request->delivery_availability;
        $restaurant->reservation_availability = $request->reservation_availability;
        $restaurant->support_all_diets = $request->support_all_diets;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        
        $restaurant->save();

        return response()->json([
            "status" => "Success",
        ], 200);

    }

    public function getAllUsers(){

        $users= user::all();

        return response()->json([
            "users" => $users
        ], 200);

    }   
    
    public function getAllReviews(){

        $reviews= review::all();

        return response()->json([
            "reviews" => $reviews
        ], 200);

    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;

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
}

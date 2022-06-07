<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/users',[AdminController::class, 'getAllUsers'])->name("getAllUsers");//if you add an extra argument which is a user id to the url you will get this user from the table users
Route::post('/signup',[UserController::class, 'signUp'])->name("signUp");
Route::post('/add_restaurant',[AdminController::class, 'addRestaurant'])->name("addRestaurant");
Route::get('/restaurants',[UserController::class, 'getAllRestaurants'])->name("getAllRestaurants");
Route::get('/reviews',[AdminController::class, 'getAllReviews'])->name("getAllReviews");


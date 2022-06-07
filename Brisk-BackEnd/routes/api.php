<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('User/all_users',[UserController::class, 'getAllUsers'])->name("getAllUsers");//if you add an extra argument which is a user id to the url you will get this user from the table users
Route::post('/User/signup',[UserController::class, 'signUp'])->name("signUp");
Route::post('Admin/add_restaurant',[UserController::class, 'addRestaurant'])->name("addRestaurant");


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/users/{id?}',[AdminController::class, 'Users'])->name("Users");
Route::post('/add_restaurant/{id?}',[AdminController::class, 'addRestaurant'])->name("addRestaurant");
Route::get('/reviews/{id?}',[AdminController::class, 'Reviews'])->name("Reviews");
Route::post('/approve_review',[AdminController::class, 'approveReview'])->name("approveReview");
Route::post('/signup',[UserController::class, 'signUp'])->name("signUp");
Route::get('/restaurants',[UserController::class, 'Restaurants'])->name("Restaurants");
Route::post('/login',[UserController::class, 'login'])->name("login");
Route::post('/add_review',[UserController::class, 'addReview'])->name("addReview");
Route::post('/edit_profile',[UserController::class, 'editProfile'])->name("editProfile");
Route::post('/approved_reviews',[UserController::class, 'getApprovedReviews'])->name("getApprovedReviews");



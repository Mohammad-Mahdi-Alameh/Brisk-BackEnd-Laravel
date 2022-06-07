<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/all_users',[UserController::class, 'getAllUsers'])->name("getAllUsers");


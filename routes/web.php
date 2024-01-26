<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('array-query',[UserController::class,'index'])->name('users.index');

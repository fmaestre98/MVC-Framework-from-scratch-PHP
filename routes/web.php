<?php

use Lib\Route;
use App\Controllers\HomeController;
use App\Controllers\UserController;

Route::get("/",[HomeController::class,'index']);

Route::get("/about",function (){
    return "About Page";
 });

 Route::get("/users",[UserController::class,'index']);
 Route::get("/users/first",[UserController::class,'firstUser']);

 Route::get("/group/:groupName",function ($groupName){
    return "Group Name Page\n"."<h1>$groupName</h1>";
 });

 Route::dispatch();
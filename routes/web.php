<?php

use Lib\Route;
use App\Controllers\HomeController;
use App\Controllers\ContactController;

Route::get("/",[HomeController::class,'index']);

Route::get("/about",function (){
    return "About Page";
 });

 Route::get("/contact",[ContactController::class,'index']);
 Route::get("/contact/first",[ContactController::class,'firstContact']);

 Route::get("/group/:groupName",function ($groupName){
    return "Group Name Page\n"."<h1>$groupName</h1>";
 });

 Route::dispatch();
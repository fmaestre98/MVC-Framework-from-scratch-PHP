<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get("/",[HomeController::class,'index']);

Route::get("/about",function (){
    return "About Page";
 });

 Route::get("/contact",function (){
    return "Contact Page";
 });

 Route::get("/group/:groupName",function ($groupName){
    return "Group Name Page\n"."<h1>$groupName</h1>";
 });

 Route::dispatch();
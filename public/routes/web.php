<?php

use Lib\Route;

Route::get("/",function (){
   return "Home Page";
});

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
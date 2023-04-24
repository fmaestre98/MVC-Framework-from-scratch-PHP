<?php

use Lib\Route;

Route::get("/",function (){
   echo "Home Page";
});

Route::get("/about",function (){
    echo "About Page";
 });

 Route::get("/contact",function (){
    echo "Contact Page";
 });

 Route::dispatch();
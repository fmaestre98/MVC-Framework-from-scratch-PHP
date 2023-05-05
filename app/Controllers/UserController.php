<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller{
    public function index()
    {
       $user=new User();
       return $user->queryAll();
    }

    public function firstUser()
    {
        $user=new User();
        return $user->queryFirst();
    }



}

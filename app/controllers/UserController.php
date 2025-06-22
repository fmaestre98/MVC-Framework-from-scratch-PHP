<?php

namespace app\controllers;

use app\models\User;

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

<?php

namespace app\controllers;


    class HomeController extends Controller{


        public function index()
        {
         return $this->view("home",[
                "title"=>"Home",
                "description"=>"Hello from home page"
            ]);
        }

        
          

    }

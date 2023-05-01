<?php

namespace App\Controllers;

use App\Models\Contact;

    class HomeController extends Controller{


        public function index()
        {

            $contactModel=new Contact();
           return $contactModel->queryAll();
   /*         return $this->view("home",[
                "title"=>"Home",
                "description"=>"Hello from home page"
            ]);*/
        }

        
          

    }

<?php

namespace app\controllers;
class Controller{

    public function view($route,$data=[])
    {

        extract($data);

        $route=str_replace('.','/',$route);
        if (file_exists("../resources/views/{$route}.php")) {
            ob_start();  
            include "../resources/views/{$route}.php";
            $content=ob_get_clean();

            return $content;
        }else {
            return "file not found";
        }

    }

}
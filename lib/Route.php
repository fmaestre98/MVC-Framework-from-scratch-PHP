<?php

namespace lib;
 
class Route
{

    private static $routes=[];

    public static function get($uri,$callback){
        $uri=trim($uri,"/");
        self::$routes["GET"][$uri]=$callback;
    }

    public static function post($uri,$callback){
       $uri=trim($uri,"/");
       self::$routes["POST"][$uri]=$callback;
    }

    public static function dispatch()
    {
        $uri=$_SERVER['REQUEST_URI'];
        $uri=trim($uri,"/");
         
        $method=$_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$method] as $route => $callback) {
        
            if (strpos($route,":")!==false) {
                $route=preg_replace('#:[a-zA-Z]+#','([a-zA-Z]+)',$route);
            }
        
            if (preg_match("#^$route$#",$uri,$matches)) {
             $params=array_slice($matches,1);   


             if (is_array($callback)) {
               $controller=new $callback[0];
               $response=$controller->{$callback[1]}(...$params);
             }else {
                $response= $callback(...$params);
             }

             
              
             if(is_array($response) || is_object($response)){
                header('Content-Type: application/json');
                echo json_encode($response);
             }else {
                echo $response;
            }
            
             return;
           }
        }

        echo "404 Not Found";
    }

}
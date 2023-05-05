<?php

namespace App\Models;

use mysqli;
use Exception;

class Model{
    private $connection;
    private $query;

    

     public function open_Connection(){
         if (!isset($this->connection)){
         try{
         
             $this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
             
 
             if ($this->connection->connect_error) {
                 die("Error de conexion ".$this->connection->connect_error);
             }
         
 
         }catch (Exception $ex){
         print "Error". $ex->getMessage()."<br>";
         die();
             }
         }
         return $this->connection;
     }
 
     public function close_Connection(){
         if (isset($this->connection)){
 
             $this->connection=null;
         }
     }
     public function get_Connection(){
 
         if (!isset($this->connection)){
           $this->open_Connection();
         }
         return $this->connection;
     }
 
 
     public function query($sql)
     {
 
         $this->query=$this->connection->query($sql);
         
         return $this; 
         
     }
 
     public function first()
     {
         return $this->query->fetch_assoc();
     }
 
     public function get()
     {
         return $this->query->fetch_all(MYSQLI_ASSOC);
     }
 

}
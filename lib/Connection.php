<?php

namespace Lib;
use mysqli;
use Exception;

class Connection
{

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

        $this->query=$this->connection->query($sql)->fetch_all(MYSQLI_ASSOC);
        
        return $this->query; 
        
    }

}
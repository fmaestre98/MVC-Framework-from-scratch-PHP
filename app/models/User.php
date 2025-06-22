<?php

namespace app\models;


class User extends Model{
   
   public function queryAll()
   {
       $this->get_Connection();
       $res=$this->query("SELECT * FROM users")->get();
       $this->close_Connection();

       return $res; 
   }

   public function queryFirst()
   {
      $this->get_Connection();
       $res=$this->query("SELECT * FROM users")->first();
      $this->close_Connection();

       return $res; 
   }

   


}

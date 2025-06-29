<?php

namespace app\models;


class User extends Model{
    
    public static $schema = [
        'id' => 'INT AUTO_INCREMENT PRIMARY KEY',
        'name' => 'VARCHAR(255) NOT NULL',
        'email' => 'VARCHAR(255) NOT NULL'
    ];

    public static $tableName = "users";
   
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

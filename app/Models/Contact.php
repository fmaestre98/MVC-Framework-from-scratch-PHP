<?php

namespace App\Models;


class Contact{
   private $id;
   private $name;
   private $email;
   private $phone;


    public function __construct(int $id = null,string $name,string $email,string $phone) {
    $this->id=$id;
    $this->name=$name;
    $this->email=$email;
    $this->phone=$phone;
   }
 
   public function getId()
   {
    return $this->id;
   } 

   public function getName()
   {
    return $this->name;
   }
   
   public function getEmail()
   {
    return $this->email;
   }

   public function getPhone()
   {
    return $this->phone;
   }

}

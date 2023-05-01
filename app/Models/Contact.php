<?php

namespace App\Models;

use Lib\Connection;

class Contact{
  
  
    public function queryAll()
    {

        $connection=new Connection();
        $connection->get_Connection();
        $res=$connection->query("SELECT * FROM contacts");
        $connection->close_Connection();

        return $res; 
        
    }

}

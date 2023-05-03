<?php

namespace App\Repositories;  

use Lib\Connection;

class ContactRepository 
{
    public function queryAll()
    {
        $connection=new Connection();
        $connection->get_Connection();
        $res=$connection->query("SELECT * FROM contacts")->get();
        $connection->close_Connection();

        return $res; 
    }

    public function queryFirst()
    {
        $connection=new Connection();
        $connection->get_Connection();
        $res=$connection->query("SELECT * FROM contacts")->first();
        $connection->close_Connection();

        return $res; 
    }

    
}

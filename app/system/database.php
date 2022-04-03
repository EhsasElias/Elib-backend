<?php

namespace coding\app\system;
use Dotenv\Dotenv;
use PDO;

class Database
{
    public $pdo;

    function __construct($dbconfig)
    {
         
        $dsn = "mysql:host=".$dbconfig['servername'].";dbname=".$dbconfig['dbname'];
        $username=$dbconfig['dbusername'];
        $pass=$dbconfig['dbpass'];
         $this->pdo = new \PDO($dsn,$username,$pass,[
             PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
         ]);
        
    }
    public function insert(){

    }
    public function update(){
        
    }
    public function delete(){

    }
}

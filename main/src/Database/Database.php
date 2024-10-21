<?php

namespace MrNan\Main\Database;

use PDO;

class Database
{
    public Migrations $migrations;
    public PDO $pdo;
public function __construct()
{
    try{
//        $this->pdo=new PDO("mysql:host=78.159.108.115;dbname=yiwura_raymond","yiwura_main","6FFa04ri7Tf%");

    $this->pdo=new PDO("mysql:host=185.252.28.166;dbname=yiwuraym_raymond","yiwuraym_admin_main","oTMonXHfJ6Gj");
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$this->migrations=new Migrations($this);
}
catch(\Exception $e){
   echo "cant connect to database !!!".$e->getFile();
}
}
}

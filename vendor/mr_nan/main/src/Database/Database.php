<?php

namespace MrNan\Main\Database;

use PDO;

class Database
{
    public Migrations $migrations;
    public PDO $pdo;
public function __construct()
{
$this->pdo=new PDO("mysql:host=localhost;dbname=yiwuraymond","root","");
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$this->migrations=new Migrations($this);
}
}
<?php

use MrNan\Main\Application;

return new class
{
    private $db;
    public function __construct()
    {
        $this->db=  Application::$app->db;

    }
  public function up() :void

  {
    $sql = "CREATE TABLE IF NOT EXISTS `user`(id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ";
    $this->$db->pdo->exec($sql);
  }
    public function down() :void
    {
    $sql = "DROP TABLE IF EXISTS `user`";
       $this-> $db->pdo->exec($sql);

    }
};
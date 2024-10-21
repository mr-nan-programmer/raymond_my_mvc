<?php

use MrNan\Main\Application;
return new class
{

  public function up() :void
  {

    $sql = "CREATE TABLE IF NOT EXISTS users (id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ";
      Application::$app->db->pdo->exec($sql);
  }
    public function down() :void
    {
    $sql = "DROP TABLE users";
        Application::$app->db->pdo->exec($sql);

    }
};

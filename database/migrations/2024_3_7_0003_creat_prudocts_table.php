<?php

use MrNan\Main\Application;
return new class
{

  public function up() :void
  {

    $sql = "CREATE TABLE IF NOT EXISTS prudocts (id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
    name VARCHAR(255) NOT NULL UNIQUE,
    title VARCHAR(255) NOT NULL,
    about VARCHAR(255) NOT NULL,
    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    score varchar(255)
    ) ";
      Application::$app->db->pdo->exec($sql);
  }
    public function down() :void
    {
    $sql = "DROP TABLE prudocts";
        Application::$app->db->pdo->exec($sql);

    }
};

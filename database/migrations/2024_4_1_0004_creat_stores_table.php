<?php

use MrNan\Main\Application;
return new class
{

  public function up() :void
  {

    $sql = "CREATE TABLE IF NOT EXISTS stores (id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
    name_store VARCHAR(255) ,
    whats_job TEXT NOT NULL,
    email VARCHAR(255) ,
    phone TEXT NOT NULL,
    wechat TEXT NOT NULL,
    address TEXT NOT NULL,
    website TEXT NOT NULL,
    near TEXT NOT NULL,
    about_full TEXT NOT NULL,

    time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ";
      Application::$app->db->pdo->exec($sql);
  }
    public function down() :void
    {
    $sql = "DROP TABLE stores";
        Application::$app->db->pdo->exec($sql);

    }
};

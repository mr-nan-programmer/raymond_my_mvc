<?php

use MrNan\Main\Application;

return new class
{

  public function up() :void
  {
    $sql = "ALTER TABLE users ADD COLUMN password  varchar(255) NOT NULL ";
      Application::$app->db->pdo->exec($sql);
  }
    public function down() :void
    {
    $sql = "ALTER TABLE users DROP COLUMN password";
        Application::$app->db->pdo->exec($sql);

    }
};
<?php

namespace MrNan\Main\Database;

class Migrations
{
    public function __construct(public Database $db)
    {
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();

    }

    public function rollbackMigrations()
    {

    }


    public function createMigrationsTable()
    {
    $this->db->pdo->exec("CREATE TABLE IF NOT EXISTS migrations ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    migration VARCHAR(255),
    batch INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)ENGINE = InnoDB;");

    }
}
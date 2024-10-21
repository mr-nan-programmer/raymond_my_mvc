<?php

namespace MrNan\Main\Database;

use MrNan\Main\Application;
use PDO;

class Migrations
{
    public function __construct(public Database $db)
    {
    }

    public function applyMigrations()
    {
        $this->createMigrationsTable();
        $applaymigrations =$this->getAppliedMigrations();
        $applaymigrations= array_map(fn($migration)=>$migration->migration,$applaymigrations);
        $newmigrations=[];
        $files= scandir(Application::$ROOT_DIR .'/./database/migrations');
        $migrations=array_diff($files,$applaymigrations);

        foreach ($migrations as $migration){
           if ($migration === '.' || $migration === '..')
               continue ;
           $migratInstans= require_once Application::$ROOT_DIR .'/database/migrations'.'/'.$migration;
           $this->log("applying migration $migration");
           $migratInstans->up();
           $this->log("migration $migration applied");
           $newmigrations[]=$migration;
       }
       if (!empty($newmigrations)){
           $this->saveingmigration($newmigrations);
       }else{
           $this->log("no migrations applied");
       }

    }

    public function rollbackMigrations()
    {
    $this->log("rollnacking migrations");
    $appliedmigration =$this->getAppliedMigrations();
    $lastbatch=$this->getLastBachOfMigrations();
    $mustrollback= array_filter($appliedmigration,fn($migration)=>$migration->batch==$lastbatch);
    foreach ($mustrollback as $migration){
        $migration_file= require_once Application::$ROOT_DIR."/database/migrations/{$migration->migration}";

        $this->log("rollbacking migration {$migration->migration}");
        $migration_file->down();
        $this->log("rollback down migration {$migration->migration}" );

    }
        if (!empty($mustrollback)){
            $this->deleteMigrations(array_map(fn($migration)=>$migration->id,$mustrollback));
        }else{
            $this->log("no migrations rollback");
        }
    }
    protected function deleteMigrations( $migration_id) :void
    {
    $ids=implode(",",$migration_id);
    $this->db->pdo->exec("DELETE FROM migrations WHERE id in ({$ids})");
    }
    protected function saveingmigration($newmigrations) :void {
        $batchnumber = $this->getLastBachOfMigrations()+1;
        $rows= implode( ',',array_map(fn($m)=>"('$m',$batchnumber)",$newmigrations));
        $this->db->pdo->exec("INSERT INTO migrations (migration,batch) VALUES $rows");
    }

    protected function getAppliedMigrations(): ?array
    {
 $statment=$this->db->pdo->prepare("SELECT id,migration,batch FROM migrations");
 $statment->execute();
return $statment->fetchAll(PDO::FETCH_OBJ);
    }
    protected function getLastBachOfMigrations() : int
    {
        $statment= $this->db->pdo->prepare("SELECT MAX(batch) as max FROM migrations");
        $statment->execute();
        return $statment->fetchColumn() ?? 0;
}
    public function createMigrationsTable()
    {
    $this->db->pdo->exec("CREATE TABLE IF NOT EXISTS migrations ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    migration VARCHAR(255),
    batch INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)ENGINE = InnoDB;");

    }


  private function log($massage)
    {
    $time=date("Y/m/d H:i:s");
    echo "[$time] - $massage".PHP_EOL;
    }
}

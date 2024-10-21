<?php
require_once './../vendor/autoload.php';

$app = new \MrNan\Main\Application(dirname(__DIR__));


switch ($argv[1] ??false){
    case '--rollback';
    $app->db->migrations->rollbackMigrations();
    break;
    default :
        $app->db->migrations->applyMigrations();

}

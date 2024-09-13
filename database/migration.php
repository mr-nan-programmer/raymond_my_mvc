<?php
require_once './../vendor/autoload.php';

$app = new \MrNan\Main\Application(dirname(__DIR__));
$app->db->migrations->applyMigrations();




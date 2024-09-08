<?php require_once './../vendor/autoload.php';

$app=new \MrNan\Main\Application();
$app->router->set_router_file(__DIR__."/../route/web.php");
$app->run();


?>
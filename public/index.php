<?php require_once './../vendor/autoload.php';

$app=new \MrNan\Main\Application(dirname(__DIR__));

$app->router->set_router_file(__DIR__."/../route/web.php");
$app->router->set_router_file(__DIR__."/../route/api.php");

//$app->router->updating_websit();

$app->run();

?>
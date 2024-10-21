<?php

use JetBrains\PhpStorm\NoReturn;
use MrNan\Main\Application;
use MrNan\Main\Requsts;
use MrNan\Main\Response;
use MrNan\Main\Session;

if (!class_exists('vd')){
 #[NoReturn] function vd(mixed $value): void
 {
   var_dump($value);die();
    }
}
if (!class_exists('app')){
    function app(mixed $value=null):Application
    {
        return Application::$app;
    }
}
if (!class_exists('request')){
    function request($method=null,$key=null ): Requsts|string|array|null
    {
        if(is_null($key)&&is_null($method)){
            return app()->request;
        }
        return app()->request->get_requst($method,$key);
    }
}
if (!class_exists('redirect')){
    function redirect(string $url ): Response
    {

        return app()->Response->redirect($url);
    }
}
if (!class_exists('response')){
    function response( ): Response
    {

        return app()->Response;
    }
}
//session
if (!class_exists('session')){
    function session( ): Session
    {

        return app()->session;
    }
}
<?php

use App\Http\Controllers\about_and_contact;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\en_routes;
use App\Http\Controllers\home_controllers;
use App\Http\Controllers\products;
use MrNan\Main\Router ;
use MrNan\Main\Requsts ;
Router::call_page("/auth",[RegisterController::class,"registerview"],[RegisterController::class,"register"]);

Router::call_page("/",[home_controllers::class,"index"],[home_controllers::class,"backend"]);
Router::call_page("/about",[about_and_contact::class,"about"],[about_and_contact::class,"backend"]);
Router::call_page("/contact",[about_and_contact::class,"contact"],[about_and_contact::class,"backend"]);
Router::call_page("/products",[products::class,"index"],[products::class,"backend"]);
Router::call_page("/en",[en_routes::class,"index"],[en_routes::class,"backend"]);
Router::call_page("/en/about",[en_routes::class,"about"],[en_routes::class,"backend"]);
Router::call_page("/en/contact",[en_routes::class,"contact"],[en_routes::class,"backend"]);
Router::call_page("/en/products",[en_routes::class,"products"],[en_routes::class,"backend"]);

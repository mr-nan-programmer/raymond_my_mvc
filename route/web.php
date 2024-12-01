<?php

use App\Http\Controllers\about_and_contact;
use App\Http\Controllers\Admin_panel;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\developer;
use App\Http\Controllers\email_veifay;
use App\Http\Controllers\en_routes;
use App\Http\Controllers\fa_routes;
use App\Http\Controllers\home_controllers;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\products;
use App\Http\Controllers\Stores;
use MrNan\Main\Router ;
use MrNan\Main\Requsts ;
Router::call_page("/auth",[RegisterController::class,"registerview"],[RegisterController::class,"register"]);
Router::call_page("/auth/login",[RegisterController::class,"loginview"],[RegisterController::class,"loginprocess"]);
Router::call_page("/auth/logout",[RegisterController::class,"logout"]);
Router::call_page("/panel/user",[PanelController::class,"index"],[PanelController::class,""]);


Router::call_page("/adminray",[Admin_panel::class,"index"],[Admin_panel::class,"back"]);
Router::call_page("/adminray/developer",[developer::class,"index"],[developer::class,"request"]);

Router::call_page("/fa",[fa_routes::class,"index"],[Admin_panel::class,"back"]);
Router::call_page("/fa/about",[fa_routes::class,"about"],[Admin_panel::class,"back"]);
Router::call_page("/fa/contact",[fa_routes::class,"contact"],[Admin_panel::class,"back"]);
Router::call_page("/fa/products",[fa_routes::class,"products"],[Admin_panel::class,"back"]);


Router::call_page("/addstoreray",[Stores::class,"addstore"],[Stores::class,"adding_process"]);
Router::call_page("/",[home_controllers::class,"index"],[email_veifay::class,"backend"]);
Router::call_page("/about",[about_and_contact::class,"about"],[email_veifay::class,"backend"]);
Router::call_page("/contact",[about_and_contact::class,"contact"],[email_veifay::class,"backend"]);
Router::call_page("/products",[products::class,"index"],[products::class,"backend"]);
Router::call_page("/en",[en_routes::class,"index"],[email_veifay::class,"backend"]);
Router::call_page("/en/about",[en_routes::class,"about"],[email_veifay::class,"backend"]);
Router::call_page("/en/contact",[en_routes::class,"contact"],[en_routes::class,"backend"]);
Router::call_page("/en/products",[en_routes::class,"products"],[en_routes::class,"backend"]);

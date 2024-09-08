<?php

use App\Http\Controllers\home_controllers;
use MrNan\Main\Router ;
use MrNan\Main\Requsts ;

Router::call_page("/{id}",[home_controllers::class,"index"],[home_controllers::class,"backend"]);

<?php

use App\Http\Controllers\api;
use MrNan\Main\Router;

Router::call_page("/githubupdate",[api::class,"index"],[api::class,"index"]);
Router::call_page("/githubupdate2",[\App\Http\Controllers\about_and_contact::class,"index"],[api::class,"index"]);

 ?>
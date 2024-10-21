<?php

namespace App\Http\Controllers;

use MrNan\Main\Controller;

class en_routes extends Controller
{
    public function index(){
    echo  $this->render("en_routes.index");

    }
    public function contact(){
        echo  $this->render("en_routes.index");

    }
    public function about(){
        echo  $this->render("en_routes.about");

    }
    public function products()
    {
        echo  $this->render("en_routes.index");

    }
}
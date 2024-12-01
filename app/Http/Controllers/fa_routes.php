<?php

namespace App\Http\Controllers;

use MrNan\Main\Controller;

class fa_routes extends Controller
{
    public function index(){
    echo  $this->render("fa_routes.index");

    }
    public function contact(){
        echo  $this->render("fa_routes.contact");

    }
    public function about(){
        echo  $this->render("fa_routes.about");

    }
    public function products()
    {
        echo  $this->render("fa_routes.sd");

    }
}
<?php

namespace App\Http\Controllers;

use MrNan\Main\Controller;

class about_and_contact extends Controller
{
    public function about()
    {
    echo $this->render("5page.about");
    }
    public function contact(){
        echo $this->render("5page.contact");

    }

}
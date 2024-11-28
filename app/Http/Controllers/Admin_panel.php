<?php

namespace App\Http\Controllers;

use MrNan\Main\Controller;

class Admin_panel extends Controller
{
public function index()
{
    echo $this->render("admin_panel.index");
}
public function back()
{

}
}
<?php

namespace App\Http\Controllers;

use MrNan\Main\Controller;

class developer extends Controller
{
public function index(){

    echo $this->render('admin_panel.developer');
}
public function request()
{
    ini_set("display_errors", 1);

    if(array_key_exists("update",request()->all_request_spc()['post'])) {
        echo "<style>
body{
color: whitesmoke;
background: black;
}

</style>";
        $app = new \MrNan\Main\Application(dirname(dirname(dirname(__DIR__))));
    $app->db->migrations->applyMigrations();
    }

}
}
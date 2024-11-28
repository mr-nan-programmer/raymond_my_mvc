<?php

namespace App\Http\Controllers;

use App\Models\Store_db;
use MrNan\Main\Controller;
use Rakit\Validation\ErrorBag;

class Stores extends Controller
{
public function addstore() :mixed
{
    return $this->render('helpers.add_store');
}
public function adding_process(){
    ini_set('display_errors', '1');

    $validation=$this->validation((array)request()->all_request_spc()["post"],
        [
            'name_store'=>'max:255',
            'whats_job'=>'required',
            'email'=>'email|max:255',
            'phone'=>'max:255',
            'wechat'=>'',
            'address'=>'required',
            'website'=>'',
            'near'=>'required',
            'about_full'=>''

        ]

    );
    if ($validation->fails()){
        return redirect("/addstoreray");

    }else{
        echo "<script>alert('success')</script>";

        $datavalidated=$validation->getValidatedData();
    (new Store_db())->create($datavalidated);


    redirect("/addstoreray");
    }
}
}
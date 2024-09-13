<?php

namespace App\Http\Controllers;

use MrNan\Main\Controller;
use MrNan\Main\Requsts;

class products extends Controller
{
public function index()
{
    $requests=new Requsts();
    $gets=$requests->all_request_spc()['get'];
    $data=[];
    $data["checked"]="checked";
    $data["checked_fiber"]=" ";
    $data["checked_co2"]=" ";
    $data["selected_default"]="selected";
    $data["selected_a_z"]="";
    if (isset($gets["filter_one"])) {
       if ($gets["filter_one"]=="fiber"){
           $data["checked_fiber"]="checked";
           $data["checked_co2"]="";
           $data["checked"]="";
       }if ($gets["filter_one"]=="co2"){
            $data["checked_co2"]="checked";
            $data["checked_fiber"]="";
            $data["checked"]="";


        }

    }
    if (isset($gets["filter_z"])) {

        if ($gets["filter_z"] == "default") {

            $data["selected_default"]="selected";
            $data["selected_a_z"]="";
            $data["checked"]="";


        }
        if ($gets["filter_z"] == "a-z") {
            $data["selected_a_z"]="selected";
            $data["selected_default"]="";



        }

    }

        echo $this->render("5page.products",$data);


}
}
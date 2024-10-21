<?php

namespace App\Http\Controllers\auth;

use MrNan\Main\Controller;
use MrNan\Main\Requsts;
use Rakit\Validation\ErrorBag;

class RegisterController extends Controller
{
public function registerview(){
    return $this->render('auth.register');
}
public function register(){

$validation=$this->validation((array)request()->all_request_spc()["post"],
[
    'name'=>'required|max:255',
    'gmail'=>'required|email|max:255',
    'password'=>'required|min:6',
    'password_confirmation'=>'required|same:password'
]

);
if ($validation->fails()){
    redirect("/auth");
}

}
}
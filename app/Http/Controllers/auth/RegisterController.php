<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use MrNan\Main\Controller;
use MrNan\Main\Database\Model;
use MrNan\Main\Requsts;
use Rakit\Validation\ErrorBag;
use Rakit\Validation\Rules\Traits\DateUtilsTrait;

class RegisterController extends Controller
{

public function registerview(){
    if(auth()->check()){
        return redirect('user/panel');
    }
    return $this->render('auth.register');
}
public function register(){

$validation=$this->validation((array)request()->all_request_spc()["post"],
[
    'name'=>'required|max:255',
    'gmail'=>'required|email|max:255|unique:users,email',
    'password'=>'required|min:6',
    'password_confirmation'=>'required|same:password'
]

);
if ($validation->fails()){
    redirect("/auth");

}
else{
    $userData = $validation->getValidatedData();
    unset($userData['password_confirmation']);
    $email = $userData["gmail"];
    unset($userData["gmail"]);
    $userData["email"]=$email;
    (new User)->create([
        ...$userData,
        'password' => password_hash($userData['password'] , PASSWORD_DEFAULT)
    ]);
    echo "<script>alert('success')</script>";
    redirect("/auth/login");

}

}

public function loginview(){
    if(auth()->check()){
        return redirect('user/panel');
    }
    return $this->render('auth.login');
}
public function loginprocess(){

    $validation=$this->validation((array)request()->all_request_spc()["post"],
        [
'gmail' => 'required|email|max:255|exists:users,email',
    'password' => 'required|min:6,max:255']
);
if ($validation->fails()){
    redirect("/auth/login");
}
$validated_data=$validation->getValidatedData();
    $email = $validated_data["gmail"];
    unset($validated_data["gmail"]);
    $validated_data["email"]=$email;
$user =(new User())->find($validated_data["email"],'email');
if (!password_verify($validated_data['password'] , $user->password)){
    $erore=new ErrorBag();
    $erore->add('password','check-password' ,'اطلاعات وارد شده مطابقت ندارد');
     redirect("/auth/login")
        ->witherores($erore);
}
}
public function logout() :void
{

   auth()->logout();
   redirect("auth/login");
}

}
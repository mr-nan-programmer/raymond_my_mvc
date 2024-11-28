<?php

namespace MrNan\Main;

use App\Models\User;

class Auth
{
public  function check()
{
return session()->get('auth_user');
}
public  function login($user) : void
{
session()->set('auth_user', $user->id);
}
public  function logout(){
    session()->remove('auth_user');
}
    public  function user()
    {

       return (new User)->find(session()->get('auth_user'));

    }
}
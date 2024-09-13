<?php

namespace MrNan\Main;

class Controller
{
    public function validation(array $post, array $validation_code,array $message=[])
    {

        $validator=new Validator();

        $validation = $validator->make($post,$validation_code,$message);

// then validate
        $validation->validate();
        return $validation;
    }
    protected function render(string $view , array $data = [])
    {
        return (new view_engine)->render($view,$data);


    }

}
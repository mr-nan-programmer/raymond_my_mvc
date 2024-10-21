<?php

namespace MrNan\Main;

use MrNan\Main\Database\Model;
use Rakit\Validation\Validator;
class Controller
{
    public function validation(array $post, array $validation_code,array $message=[])
    {
        $validator=new Validator();
        $validation = $validator->make($post,$validation_code,$message);
// then validate
        $validation->validate();
        if ($validation->fails()) {
            response()->witherores($validation->errors())->withInputs();
        }
        return $validation;
    }
    protected function render(string $view , array $data = [])
    {
        return (new view_engine)->render($view,$data);


    }

}
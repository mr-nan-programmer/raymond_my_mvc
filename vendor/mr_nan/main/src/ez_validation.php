<?php

namespace MrNan\Main;

use Rakit\Validation\Validator;
class ez_validation
{
    public function validation(array $post, array $validation_code,array $message=[])
    {

        $validator=new Validator();

        $validation = $validator->make($post,$validation_code,$message);

// then validate
        $validation->validate();
        return $validation;
    }
}
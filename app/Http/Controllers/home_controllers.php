<?php namespace App\Http\Controllers;
use MrNan\Main\Application;
use MrNan\Main\Controller;
use MrNan\Main\ez_validation;
use MrNan\Main\Requsts;
use MrNan\Main\view_engine;
use Rakit\Validation\Validation;
use Rakit\Validation\Validator;

class home_controllers extends Controller {

    public function  backend(Requsts $requsts)
    {



   $validation= $this->validation($requsts->all_request_spc()['post'], [
        'email'=> 'required|email|max:30',

    ]);



// make it


if ($validation->fails()) {
    // handling errors
    $errors = $validation->errors();
    echo "<pre>";
    print_r($errors->firstOfAll());
    echo "</pre>";
    exit;
} else {
    // validation passes
    echo "Success!";
}

    }
    public function index()

    {

        echo $this->render("5page.home" );

    }

}
?>
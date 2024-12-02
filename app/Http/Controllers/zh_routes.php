<?php  namespace App\Http\Controllers;
use App\Models\Prudocts;
use MrNan\Main\Controller;
use MrNan\Main\Requsts;

class zh_routes extends Controller
{

    public function  index_back(Requsts $requsts)
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
            echo "<script>alert('感谢您注册您的电子邮件')</script>";
        }

    }
    public function index() :void

    {
        echo $this->render("5page.home" );
    }

    public function products()
    {
        echo $this->render("5page.products");
    }
    public function about()
    {
        echo $this->render("5page.about");
    }
    public function contact(){
        echo $this->render("5page.contact");

    }
    public function  contact_comments()
    {
        echo $this->render("5page.contact.comments");

    }
}
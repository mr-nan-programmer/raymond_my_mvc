<?php namespace MrNan\Main;
class Application
{
    public $router;
    public function __construct()
    {
        $this->router= new Router();

        echo  "<!--Application REDFARM LISTENING (V2)-->";
    }
    public function run(){

    echo $this->router->resolver();


    }
}

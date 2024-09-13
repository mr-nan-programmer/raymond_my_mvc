<?php namespace MrNan\Main;
use MrNan\Main\Database\Database;

class Application
{
    public static $app;
    public $router;
    public static $ROOT_DIR;
    public Database $db;
    public function __construct( string $root_dir)
    {
        self::$app =$this;
        self::$ROOT_DIR = $root_dir;
        $this->router= new Router();
        $this->db= new Database();
        echo  "<!--Application REDFARM LISTENING (V2)-->";
    }
    public function run(){

    echo $this->router->resolver();


    }
}

<?php namespace MrNan\Main;

use MrNan\Main\Database\Database;
use MrNan\Main\Requsts;

class Application
{
    public Response $Response;
    public static $app;
    public $router;
    public static $ROOT_DIR;
    public Database $db;
    public Requsts $request;
    public Session $session;
    public function __construct( string $root_dir)
    {
        $this->session = new Session();
        $this->Response= new Response();
        $this->request=  new Requsts();
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

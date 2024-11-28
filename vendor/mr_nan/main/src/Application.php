<?php namespace MrNan\Main;
ini_set("log_errors", 1);

use MrNan\Main\Database\Database;
use MrNan\Main\Requsts;
use Respect\Validation\Exceptions\Exception;

class Application
{
    public Response $Response;
    public static $app;
    public $router;
    public view_engine $view_engine;
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
        $this->view_engine = new view_engine();

        $this->router= new Router();
        $this->db= new Database();
        echo  "<!--Application REDFARM LISTENING (V2)-->";
    }
    public function run(){


        try{

            return $this->router->resolver();
        }
        catch (\Exception $e){
            if(!$e->getCode()==0){
                echo $this->view_engine->render("errors.{$e->getCode()}",[
                    'errore'=> $e
                ]);
            }
            else{
            echo $this->view_engine->render("errors.500",[
                "erorre"=> $e
            ]);
            }
        }


    }
}

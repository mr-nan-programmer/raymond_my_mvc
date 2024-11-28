<?php namespace MrNan\Main;
use MrNan\Main\Exception\NotFoundExeptions;
use MrNan\Main\Exception\Updating;
use ReflectionMethod;

class Router{
    private $isupdate;
    public $requsts;
    protected $router_files =[];
    static public $callpage=[
        "get"=>[],
        "post"=>[]
]
;


    public function __construct()

    {
        echo "<!--Router is run-->";
    }
    private function getcallbackfromdynamicroute()
    {
        $method=$this->requsts->get_request_method();
        $url=$this->requsts->this_url();
        $routes=self::$callpage[$method];
        foreach ($routes as $route=>$callback) {
            if (!$route)
                continue ;


            if(preg_match_all('/\{(\w+)(:[^}]+)?}/' , $route , $matches)) {
                $route_name = $matches[1];
            }

            $route_regex = "@^" . preg_replace_callback(
                    '/\{\w+(:([^}]+))?}/',
                    fn($m) => isset($m[2]) ? "({$m[2]})" : "([-\w]+)",
                    $route
                ) . "$@";




            if (preg_match_all($route_regex,$url,$matches_value)) {
                $values=[];
                unset($matches_value[0]);
                foreach ($matches_value as $match) {
                    $values[] =$match[0];
                }
               $res= array_combine($route_name,$values);
                return [0 =>$callback , 1=>$res ];

            }

        }
        return false;
    }
     public function updating_websit(){
        $this->isupdate=true;

    }
    static public function call_page($url, $get=null, $post=null)
    {


       self::$callpage["get"][$url]=$get ;
       self::$callpage["post"][$url]=$post ;

    }
     public function set_router_file(string $path) : Router{
    $this->router_files[$path]=$path;
    return $this ;
    }

    public function resolver(){

        if($this->isupdate)
            throw new Updating();


        foreach ($this->router_files as $path=>$file) {
            require_once $file;
        }
        $this->requsts=new Requsts();
        $url=$this->requsts->this_url() ;

        $callback=self::$callpage[$this->requsts->get_request_method()][$url] ?? false;

        $params_dynamic=[];
        if (!$callback ){
        $rotecallback=$this->getcallbackfromdynamicroute();

            if(!$rotecallback){
            throw new NotFoundExeptions();


        }
        $callback=$rotecallback[0];
        $params_dynamic=array_values($rotecallback[1]);

        }
        if(is_string($callback)) {
            return app()->view_engine->render($callback);
        }
       $autoinjection=[];
        if (is_array($callback)){
            $controller_methode=new ReflectionMethod($callback[0], $callback[1]);
            foreach ($controller_methode->getParameters() as $param) {
                if($param->getType()){
                    $class=$param->getType()->getName();
                    if(class_exists($class)){
                        $autoinjection [$param->getName()]=new $class();
                    }
                }
            }

            return  $controller_methode->invoke(new $callback[0], ...array_values($autoinjection), ...$params_dynamic);
        }

//        return call_user_func($callback,...$autoinjection,...$params_dynamic);





    }
}
?>



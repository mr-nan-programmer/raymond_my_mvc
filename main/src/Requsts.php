<?php namespace MrNan\Main;
use http\Env\Request;

class Requsts{
    const  POST_REQUEST = 1;
    const  GET_REQUEST = 2;


    public function this_url()
    {
        $url=$_SERVER['REQUEST_URI'];
        $position = strpos($url, '?');
        if($position !== false) {
            $url = substr($url, 0, $position);
        }
        return $url;
    }
    public function get_request_method()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
    public function is_get()
    {
        if ($this->get_request_method()== "get")
            return true;
    }
    public function is_post()
    {
        if ($this->get_request_method()== "post")
            return true;
    }
    public function all_request_spc()
    {
        $data = ["get"=>"","post"=>''];
        if ($this->is_get())
        $data["get"]=filter_input_array(INPUT_GET,FILTER_SANITIZE_SPECIAL_CHARS);
        if ($this->is_post())
        $data["post"]=filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
    return $data ;
    }
    public function get_requst( $method, string $key) : ?string
    {
        if ($method==1) {
            return $this->all_request_spc()['get'][$key] ?? null;
        }
        if ($method==2){
            return  $this->all_request_spc()['post'][$key] ?? null;
        }
      return null;
    }
}

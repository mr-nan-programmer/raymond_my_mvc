<?php namespace MrNan\Main;



use Rakit\Blade\Blade;

class view_engine
{
    protected Blade $blade;

    public function __construct()
    {

        $this->blade=new Blade([Application::$ROOT_DIR . "/resources/views"],Application::$ROOT_DIR . "/storage/cache/views"
        );
    }

    public function render(string $view , array $data = []) : string
    {
        return $this->blade->render($view , $data);
    }
}
<?php namespace MrNan\Main;



class view_engine
{
    protected Blade $blade;

    public function __construct()
    {
        $this->blade = new B(
            Application::$ROOT_DIR . "/resources/views/articles",
            Application::$ROOT_DIR . "/storage/cache/views"
        );
    }

    public function render(string $view , array $data = []) : string
    {
        return $this->blade->render($view , $data);
    }
}
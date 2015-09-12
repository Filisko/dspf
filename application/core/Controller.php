<?php
abstract class Controller
{
    public function model($name, $arg="")
    {
        require_once APP . 'models/' . strtolower($name) . 'Model.php';
        if (count($arg) == 0) {
                $name = new $name();
        } else {
                $name = new $name($arg);
        }
        return $name;
    }

    public function view($name)
    {
        require_once APP . 'core/View.php';
        $view = new View($name);
        return $view;
    }

    public function helper($name)
    {
        require_once APP .'helpers/'. strtolower($name) .'.php';
        $helper = new $name;
        return $helper;
    }
}

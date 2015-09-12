<?php
require_once APP . 'core/Request.php';

class Bootstrap
{
    public static function run($request)
    {
        $controller = $request->getController() . 'Controller';
        $controllerPath = APP . 'controllers/' . $controller . '.php';
        $method = $request->getMethod();
        $args = $request->getArgs();

        if (is_readable($controllerPath))
        {
            require_once APP . 'core/Controller.php';
            require_once APP . 'core/Model.php';

            require_once $controllerPath;

            if (class_exists($controller))
            {
                $controller = new $controller;
						
                if (is_callable(array($controller, $method)))
                {
                    if (count($args) == 0)
                    {
                        call_user_func(array($controller, $method));
                    }
                    else
                    {
                        call_user_func_array(array($controller, $method), $args);
                    }
                }
                else
                {
                    echo 'No se ha encontrado el m&eacute;todo del controlador.';
                }
            }
            else
            {
                echo 'No se ha encontrado la clase del controlador.';
            }
        }
        else
        {
            echo 'No se ha encontrado el archivo controlador.';
        }
    }
}

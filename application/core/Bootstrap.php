<?php

require_once APP . 'core/Request.php';

class Bootstrap {

    public static function run($request) {
        $controller = $request->getController();
        $controllerPath = APP . 'controllers/' . strtolower($controller) . '.php';
        $method = $request->getMethod();
        $args = $request->getArgs();
        
        require_once APP . 'core/Controller.php';
        require_once APP . 'core/Model.php';
            
        if (is_readable($controllerPath)) {
            
            require_once $controllerPath;

            if (class_exists($controller)) {
                $controller = new $controller;

                if (is_callable([$controller, $method])) {
                    if (count($args) == 0) {
                        call_user_func([$controller, $method]);
                    } else {
                        call_user_func_array([$controller, $method], $args);
                    }
                } else {
                    // If method doesn't exist
                    require_once APP . 'controllers/error.php';
                    $error = new Error();
                    call_user_func_array([$error, 'internal'], ['state' => 3]);
                }
            } else {
                // If controller's class not found
                require_once APP . 'controllers/error.php';
                $error = new Error();
                call_user_func_array([$error, 'internal'], ['state' => 2]);
            }
        } else {
            // If controller file not found
            require_once APP . 'controllers/error.php';
            $error = new Error();
            call_user_func_array([$error, 'internal'], ['state' => 1]);
        }
    }
}

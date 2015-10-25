<?php
require_once APP . 'core/request.php';

class Bootstrap {

    public static function run($request)
    {
        $controller = $request->getController();
        $path_controller = APP . 'controllers/' . strtolower($controller) . '.php';
        $method = $request->getMethod();
        $args = $request->getArgs();
        
        require_once APP . 'core/functions.php';
        require_once APP . 'core/controller.php';
        require_once APP . 'core/model.php';
            
        if (is_readable($path_controller)) {
            
            require_once $path_controller;

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
                    error('404 Error', 'Action not found', 404);
                }
            } else {
                // If controller's class not found
                error('404 Error', 'Page not found', 404);
            }
        } else {
            // If controller file not found
            error('404 Error', 'Page not found', 404);
        }
    }
}

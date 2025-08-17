<?php

namespace App\core;

use App\Controllers\Errors\HttpErrorController;

class Router {

    public function dispatch($url) {
        
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];
        $controllerName = 'App\Controllers\\' . ($parts[0] ?? 'Home');
        $controllerName = ucfirst($controllerName) . 'Controller';
        $actionName = $parts[1] ?? 'index';

        if (!class_exists($controllerName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }        

        $controller = new $controllerName();

        if (!method_exists($controller, $actionName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }

        $params = array_slice($parts, 2);
        call_user_func_array([$controller, $actionName], $params);
    }
}
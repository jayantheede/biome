<?php

namespace Core;

class Router
{
    private $routes = [];

    public function get($route, $action)
    {
        $this->routes['GET'][$route] = $action;
    }

    public function post($route, $action)
    {
        $this->routes['POST'][$route] = $action;
    }

    public function dispatch($uri, $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);
        
        if (array_key_exists($uri, $this->routes[$method])) {
            $action = $this->routes[$method][$uri];
            
            if (is_callable($action)) {
                call_user_func($action);
                return;
            }
            
            list($controller, $method) = explode('@', $action);
        } else {
            // Dynamic CMS Fallback
            $controller = 'PageController';
            $method = str_replace('-', '', ucwords(trim($uri, '/'), '-'));
            $method = lcfirst($method);
            if (empty($method)) {
                $method = 'index';
            }
        }
            
        $controllerClass = "\\Controllers\\" . $controller;
        
        // For MVP, if controller doesn't exist yet, we'll use a default PageController to render views
        if (!class_exists($controllerClass)) {
            $controllerClass = "\\Controllers\\PageController";
        }

        $controllerInstance = new $controllerClass();
        $controllerInstance->$method();
    }
}

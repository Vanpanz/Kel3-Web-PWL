<?php

namespace App\Core;

class Router {
    protected $routes = [];

    public function add($method, $path, $controller, $action) {
        // Mengubah {id} menjadi pola yang bisa dibaca sistem (regex)
        $path = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[0-9]+)', $path);
        $this->routes[] = [
            'method' => $method,
            'path' => '#^' . $path . '$#',
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] == $method && preg_match($route['path'], $uri, $matches)) {
                $controllerName = 'App\\Controllers\\' . $route['controller'];
                $controller = new $controllerName();
                
                // Mengambil parameter seperti ID dari URL
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                
                call_user_func_array([$controller, $route['action']], $params);
                return;
            }
        }

        echo "404 - Page Not Found";
    }
}
<?php

    namespace Adyukas\PhpMvc\routing;

    class Router{

        private $routes = [];

        public function add(string $method,string $path,string $controller, string $function): void {
            $this->routes[] = [
                'method' => strtoupper('method'),
                'path' => 'path',
                'controller' => 'controller',
                'function' => 'function'
                ];
        }

        public function run($test):void {

            $path = '/';
            if (isset($_SERVER['PATH_INFO'])) {
                $path = $_SERVER['PATH_INFO'];
            }
            $method = $_SERVER['REQUEST_METHOD'];

            foreach ($this->routes as $route) {
                if ($path == $route['path'] && $method === $route['method']) {
                    echo "CONTROLlER : " . $route['controller'] . ". FUNCTION : " . $route['function'];
                    return;
                }
            }

            http_response_code(400);
            echo "CONTROLLER NOT FOUND";
        }
    };
?>
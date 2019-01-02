<?php

namespace Core;

class Router
{
    protected $routes = [];

    protected $current = [];

    protected $namespace = 'App\Controllers\\';

    protected $verbs = ['GET', 'POST', 'PUT', 'DELETE'];

    public function get($uri, $params = null)
    {
        $this->addRoute('GET', $uri, $params);
    }

    public function post($uri, $params = null)
    {
        $this->addRoute('POST', $uri, $params);
    }

    public function put($uri, $params = null)
    {
        $this->addRoute('PUT', $uri, $params);
    }

    public function delete($uri, $params = null)
    {
        $this->addRoute('DELETE', $uri, $params);
    }

    public function resource($name, $controller)
    {
        $this->get($name, $controller . '@index');
        $this->get($name . '/{id:\d+}', $controller . '@show');
        $this->get($name . '/create', $controller . '@create');
        $this->post($name, $controller . '@store');
        $this->get($name . '/{id:\d+}/edit', $controller . '@edit');
        $this->put($name . '/{id:\d+}', $controller . '@update');
        $this->delete($name . '/{id:\d+}', $controller . '@destroy');
    }
    public function addRoute($method, $uri, $action)
    {
        $uri = preg_replace('/\//', '\\/', $uri);

        // Convert variables e.g. {controller}
        $uri = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $uri);

        // Convert variables with custom regular expressions e.g. {id:\d+}
        $uri = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $uri);

        $route = '/^' . $uri . $method . '$/i';
        $temp = explode('@', $action);

        $params['method'] = $method;
        $params['controller'] = $temp[0];
        $params['action'] = $temp[1];

        $this->routes[$route] = $params;
    }

    public function match($uri, $method)
    {
        $uri = $uri . $method;
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $uri, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }

                $this->current = $params;
                return true;
            }
        }
        return false;
    }

    public function runRoute($uri, $method)
    {
        $uri = $this->removeQueryString($uri);

        if($this->match($uri, $method)) {
            $controllerName = $this->namespace . $this->current['controller'];

            if(class_exists($controllerName)) {
                $controller = new $controllerName($this->current);
                $action = $this->current['action'];
                if (preg_match('/action$/i', $action) == 0) {
                    $controller->$action();
                }
            } else {
                echo 'Error ';
            }
        }
    }

    protected function removeQueryString($uri)
    {
        if ($uri != '') {
            $parts = explode('&', $uri, 2);

            if (strpos($parts[0], '=') === false) {
                $uri = $parts[0];
            } else {
                $uri = '';
            }
        }

        return $uri;
    }
}
<?php
class Router {
    private $routes = [];

    public function addRoute($method, $pattern, $callback) {
        $this->routes[] = [
            'method' => $method,
            'pattern' => $pattern,
            'callback' => $callback
        ];
    }

    public function dispatch($method, $uri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match($route['pattern'], $uri, $matches)) {
                array_shift($matches); // Remove the full match
                return call_user_func_array($route['callback'], $matches);
            }
        }
        return $this->handleNotFound();
    }

    private function handleNotFound() {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
}
?>

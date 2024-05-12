<?php
class Router {
    private $routes = [];

    // Método para registrar una ruta y su controlador asociado
    public function __construct() {
        
        $this->get("/", function($request) {
            echo "¡microservicio usuario funcionando correctamente!\n";
        });
        
    }

    // Método para manejar una solicitud HTTP
    public function handleRequest($method, $path, $request) {
        // Verificar si existe una ruta para el método y la ruta especificados
        if (isset($this->routes[$method][$path])) {
            // Obtener el nombre del controlador asociado a la ruta
            $controller = $this->routes[$method][$path];
            // Llamar al controlador y pasarle la solicitud
            $controller($request);
        } else {
            // Enviar una respuesta de error si no se encuentra la ruta
            http_response_code(404);
            echo "Ruta no encontrada";
        }
    }

    // Método para registrar una ruta GET
    public function get($path, $controller) {
        $this->routes['GET'][$path] = $controller;
    }

    // Método para registrar una ruta POST
    public function post($path, $controller) {
        $this->routes['POST'][$path] = $controller;
    }

    // Método para registrar una ruta PUT
    public function put($path, $controller) {
        $this->routes['PUT'][$path] = $controller;
    }

    // Método para registrar una ruta DELETE
    public function delete($path, $controller) {
        $this->routes['DELETE'][$path] = $controller;
    }

    // Método para iniciar el enrutamiento
    public function run() {
        // Obtener la solicitud HTTP actual
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        // Manejar la solicitud
        $this->handleRequest($method, $path, $_REQUEST);
    }
}
?>
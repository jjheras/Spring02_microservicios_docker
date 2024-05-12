<?php
class Router {
    private $routes = [];

    // Agregar una ruta al enrutador
    public function addRoute($path, $destination) {
        $this->routes[$path] = $destination;
    }

    // Ejecutar el enrutador
    public function run($handler) {
        $url = $_SERVER['REQUEST_URI'];
        $routeFound = false;

        // Buscar la ruta en las definiciones
        foreach ($this->routes as $path => $destination) {
            if (fnmatch($path, $url)) {
                $routeFound = true;
                // Llamar al manejador de solicitudes con la ruta y el destino
                $handler($path, $destination);
                break;
            }
        }

        // Si no se encuentra la ruta, devolver un error 404
        if (!$routeFound) {
            http_response_code(404);
            echo "Error 404: Ruta no encontrada";
        }
    }
}
?>
<?php
// Dependencias
require_once "./src/router.php";
require_once "./src/connect.php";

$router = new Router();
$db = new DbProductos();

// Obtener productos
$router->get("/productos", function($request) use ($db) {
    
});

// Obtener detalles de un producto
$router->get("/productos/{id-producto}", function($request) use ($db) {
    
});

// Agregar un nuevo producto
$router->post("/productos", function($request) use ($db) {
    
});

// Actualizar detalles de un producto
$router->put("/productos/{id-producto}", function($request) use ($db) {
    
});

// Eliminar un producto
$router->delete("/productos/{id-producto}", function($request) use ($db) {
    
});
$router->run();
?>
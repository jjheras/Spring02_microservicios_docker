<?php
// Dependencias
require_once "./src/router.php";

$router = new Router();

// realizar un pago
$router->post("/pagos/crear", function($request){
    
});

// Obtener detalles de un pago
$router->get("/pagos/{id-pago}", function($request){
});

$router->run();
?>
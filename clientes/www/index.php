<?php
// Dependencias
require_once "./src/router.php";
require_once "./src/connect.php"; 
//require_once "../cache/redis.php"

$router = new Router();
$db = new DbClientes(); 

// Gestionar la devolución de los pedidos
$router->post("/clientes/devoluciones/{id-pedido}", function($request) use ($db) {
    
});

// Gestionar la seguimiento de los pedidos
$router->post("/clientes/seguimiento_pedido/{id-pedido}", function($request) use ($db) {
 
});

// Gestionar el historial de compras
$router->get("/clientes/historial_compras/{id-usuario}", function($request) use ($db) {
   
});

$router->run();
?>
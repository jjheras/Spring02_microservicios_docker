<?php
// Dependencias
require_once "./src/router.php";
require_once "./src/connect.php";

$router = new Router();
$db = new DbPedidos();

// Realizar un pedido
$router->post("/pedidos/crear", function($request) use ($db) {
});
// Obtener detalles de un pedido
$router->get("/pedidos/{id-pedido}", function($request) use ($db) {
});
// Actualizar detalles de un pedido
$router->put("/pedidos/{id-pedido}", function($request) use ($db) {
});
// Borrar un pedido
$router->delete("/pedidos/{id-pedido}", function($request) use ($db) {
});
// obtener lista de pedidos
$router->get("/pedidos/{id-usuario}", function($request) use ($db) {
    
});

$router->run();


?>
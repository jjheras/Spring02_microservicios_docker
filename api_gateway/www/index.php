<?php
// dependencias
require_once './src/router.php';

$router = new Router();

// Redirigir solicitudes
$router->addRoute("/usuarios/app/*","http://php_usuarios");
$router->addRoute("/recomendaciones/app/*","http://flask-recomendaciones");
$router->addRoute("/productos/app/*","http://php_productos");
$router->addRoute("/pedidos/app/*","http://php_pedidos");
$router->addRoute("/clientes/app/*","http://php_clientes");
$router->addRoute("/integraciones/app/*","http://python-integracion");

// Manejar envios de solicitudes

function handleRequest($route, $url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
}

$router->run('handleRequest');
?>
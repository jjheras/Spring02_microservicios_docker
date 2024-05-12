<?php
require_once "./src/router.php";
require_once "./src/connect.php";

$router = new Router();
$db = new DbUsuarios();

// Registrar usuario 
$router->post("/usuario/registro", function ($request) use ($db) {
    echo "/usuario/registro";
});

// Iniciar sesión 
$router->post("/usuario/login", function ($request) use ($db) {
    echo "/usuario/login";
});

// Detalles usuario 
$router->get("/usuarios/{id-usuario}", function ($request) use ($db) {
    echo "/usuarios/{id-usuario}";
});

// Actualizar usuarios
$router->put("/usuarios/{id-usuario}", function ($request) use ($db) {
    echo "/usuarios/{id-usuario}";
});

// Borrar usuarios
$router->delete("/usuarios/{id-usuario}", function ($request) use ($db) {
    echo "/usuarios/{id-usuario}";
});

$router->run();
?>
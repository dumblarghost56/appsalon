<?php 

require_once __DIR__ . '/../includes/app.php';
use MVC\Router;
use Controllers\LoginController;
$router = new Router();

//Inicar sesion
$router->get("/login",[LoginController::class,"login"]);
$router->post("/login",[LoginController::class,"login"]);
$router->get("/logout",[LoginController::class,"logout"]);

//Crear cuenta
$router->get("/create",[LoginController::class,"create"]);
$router->post("/create",[LoginController::class,"create"]);

//Recuperar cuenta
$router->get("/olvide",[LoginController::class,"olvide"]);
$router->post("/olvide",[LoginController::class,"olvide"]);
$router->get("/recovery",[LoginController::class,"recovery"]);
$router->post("/recovery",[LoginController::class,"recovery"]);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
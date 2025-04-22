<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . '/../app/Controllers/AuthCon.php';


$router = new Router("http://localhost/projetoZ2");

$router->namespace("App\Controllers");

// Define as rotas
$router->group(null);

$router->get("/", "AuthCon:index");
$router->post("/verifica-login", "AuthCon:processVerificaLoginAction");

// Despacha as rotas
$router->dispatch();

if ($router->error() && !$router->current()) {
    echo $router->error();
}
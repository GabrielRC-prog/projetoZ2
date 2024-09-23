<?php

namespace Routes\Web;

use CoffeeCode\Router\Router;
use App\Controllers\AuthCon;
use App\Controllers\HomeCon; 

$router = new Router("http://localhost:8080/projetoZ2.0");

//Home

$router->group(null);
$router->get("/", [HomeCon::class, 'home']);

//aut

$router->group("aut");

//login
$router->get("/login", "AuthCon:login");
$router->post("/login", "AuthCon:login");

//registro  
$router->get("/register", "AuthCon:register");
$router->post("/register", "AuthCon:register");

//post

$router->group("posts");
$router->get("");
$router->get("");
$router->post("");
$router->get();
$router->post();
$router->post(); 

$router->dispatch();

if($router->error()) {
    echo "Erro: {$router->error()}"; 
}
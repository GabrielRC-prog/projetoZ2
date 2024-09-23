<?php

namespace App\Controllers;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use CoffeeCode\DataLayer\DataLayer;

class AuthCon 
{
    //login
    public function login($data)
    {
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $user = (new User())->find("email = :email","email={$data['email']}")->fetch();
        }

        if($user && password_verify($data['password'], $user->password)){
            
            $_SESSION['user'] = $user->data();
            echo "Login realizado com sucesso.";
        } else {
            echo "email ou senha incorretos.";
        }
    }

    //registro
    public function register($data)
    {
        if($_SERVER['REQUEST_METHOD'] === "POST"){
        $user = new User();
        $user->user = $data['username'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($user->save()){
            echo "Cadastro feito. Bem vindo ao Z!";
        } else {
            echo "não foi possível realizar o cadastrado :("; 
         }
      } 
    }
}
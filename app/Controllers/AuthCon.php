<?php

namespace App\Controllers;

class AuthCon
{
    public function index()
    {
        require __DIR__ . '/../Views/auth/login.phtml';
    }
    public function processVerificaLoginAction()
    {
        header('Content-Type: application/json; charset=utf-8');
        header('X-Content-Type-Options: nosniff');

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'aa' && $password == '123')
        {
            echo json_encode(["status" => 'success', "message" => "Login realizado com sucesso. Bem vindo ao Projeto Z!"]);
        } else {
            echo json_encode(["status" => 'success', "message" => "Usuario ou senha inválidos."]);
        }

        $a = "deu certo";
        echo json_encode($a);   
    }
}

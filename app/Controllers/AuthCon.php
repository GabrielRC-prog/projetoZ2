<?php

namespace App\Controllers;

error_reporting(E_ALL);
ini_set('display_errors', 1);

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

        $json = 
        file_get_contents('php://input');
        $data = json_decode($json, true);
        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';

        if ($username == 'aa' && $password == '123')
        {
            http_response_code(200);
            echo "ok";
        } else {
            http_response_code(401); // Não autorizado
            echo "fail";
        }
        
        exit;
    }
}

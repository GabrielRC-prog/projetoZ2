<?php

namespace App\Controllers;

class HomeCon
{
    public function home()
    {
        if (isset($_SESSION['user'])){
            echo "Bem vindo, {$_SESSION ['user']['username']}. Confira as novidades:";
        } else {
            echo "Bem vindo ao Z! <a href='/auth/login'>Login</a> ou <a href='/auth/register'>Cadastre-se</a> para ver as postagens";
        }
    }

    private function showPosts()
    {
        $posts = (new \App\Models\Post())->find()->fetch(true);

        if ($posts) {
            foreach ($posts as $post) {
                echo "<h3>{$post->title}</h3>";
                echo "<p>{$post->content}</p>";
                echo "<hr>";
            }
        } else {
            echo "Nenhum post encontrado.";
        }
    }
}






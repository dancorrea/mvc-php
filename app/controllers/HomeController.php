<?php

namespace App\Controllers;

use App\core\Controller;
use App\Core\Database;
use App\Models\Usuario;

class HomeController extends Controller {

    public function index() {

        $usuario = new Usuario();
        $data = $usuario->getUserData();

        // echo 'Criando novo usuário...<br>';
        // $usuarioCriado = $usuario->createUser('Usuário Teste');
        // echo "Usuário criado: " . $usuarioCriado . "<br>";

        $usuarios = $usuario->getAllUsers();
        echo "Lista de usuários:<br>";
        foreach ($usuarios as $user) {
            echo "ID: " . $user['id'] . " - Nome: " . $user['nome'] . "<br>";
        }

        $this->view('home/index', $data);
        return;
    }

    public function contact() {
        $this->view('home/contact');
    }
}
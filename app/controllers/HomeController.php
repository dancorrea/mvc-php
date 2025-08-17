<?php

namespace App\Controllers;

use App\core\Controller;
use App\Models\Usuario;

class HomeController extends Controller {

    public function index() {

        $usuario = new Usuario();
        $data = $usuario->getUserData();

        $this->view('home/index', $data);
        return;
    }

    public function contact() {
        $this->view('home/contact');
    }
}
<?php 

namespace App\Models;

class Usuario {

    public function getUserData() {
        return [
            'sistema' => 'MVC - PHP 8', 
            'versao' => '1.0.1',
            'email' => 'contato@mvc.com'
        ];
    }

}
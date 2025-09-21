<?php 

namespace App\Models;

use App\Core\Model;

class Usuario extends Model {

    public function getUserData() {
        return [
            'sistema' => 'MVC - PHP 8', 
            'versao' => '1.0.1',
            'email' => 'contato@mvc.com'
        ];
    }

    public function createUser($name) {
        $sql = "INSERT INTO usuarios (nome) VALUES (:name)";
        $params = ['name' => $name];
        return $this->database->execute($sql, $params);
    }

    public function getAllUsers() {
        return $this->database->fetchAll("SELECT * FROM usuarios");
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $params = ['id' => $id];
        return $this->database->fetch($sql, $params);
    }

    public function getUsersCount() {
        return $this->database->fetch("SELECT COUNT(*) as count FROM usuarios")['count'];
    }
}
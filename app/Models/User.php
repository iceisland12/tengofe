<?php

namespace App\Models;

class User extends Database {

    public function register($name, $password, $email){
        $query = $this->db->prepare("INSERT INTO user (name, password, email) VALUES(?,?,?)");
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $query->bind_param('sss', $name, $password, $email);
        $query->execute();
        $insertedId = $query->insert_id;
        $query->close();
        return $insertedId;
    }
}
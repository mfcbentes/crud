<?php

class Manager extends Connection {

    public function insertClient($table, $data){
        $pdo = parent::getInstance();

        $fields = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $stmt = $pdo->prepare($sql);

        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
        }

        $stmt->execute();
    }

    public function listClients($table){
        $pdo = parent::getInstance();

        $sql = "SELECT * FROM $table ORDER BY name ASC";
        $stmt = $pdo->query($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function deleteClient($table, $id){
        $pdo = parent::getInstance();

        $sql = "DELETE FROM $table WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

    public function listClient($table, $id){
        $pdo = parent::getInstance();

        $sql = "SELECT * FROM $table WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function updateClient($table, $data, $id){
        $pdo = parent::getInstance();

        $new_values = "";

        foreach($data as $key => $value){
            $new_values .= "$key=:$key, ";
        }

        $new_values = substr($new_values, 0, -2);

        $sql = "UPDATE $table set $new_values WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value, PDO::PARAM_STR);
        }

        $stmt->bindValue(":id", $id);

        $stmt->execute();
        
    }
}

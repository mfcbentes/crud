<?php

    require_once("../db/Connection.class.php");
    require_once("../model/Manager.class.php");

    $manager = new Manager();

    $id = $_POST["id"];

    if(isset($id) && !empty($id)){
        $manager->deleteClient("registros", $id);

        header("Location: ../index.php?client_deleted");
    }

?>
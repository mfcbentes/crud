<?php

    require_once("../db/Connection.class.php");
    require_once("../model/Manager.class.php");

    $manager = new Manager();

    $dataClient = $_POST;

    if(isset($dataClient["id"]) && !empty($dataClient["id"])){
        $manager->updateClient("registros", $dataClient, $dataClient["id"]);

        header("Location: ../index.php?client_updated");
    }

?>
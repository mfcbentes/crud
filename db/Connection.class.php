<?php

class Connection
{
    public static $instance;

    public static function getInstance()
    {

        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=localhost;dbname=agendamentos", "mfcbentes", "mfcb@2018.stm", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}

?>
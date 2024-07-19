<?php
    function db() {
        $connexion  = null;
        $host       = 'localhost';
        $db_name    = 'oil_sale';
        $username   = 'root';
        $password   = '';
        $nPort      = 3306;
        try{
            $connexion = new PDO("mysql:host=" . $host . ";dbname=" . $db_name.";port=". $nPort, $username, $password);
            $connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $connexion;
    }
?>
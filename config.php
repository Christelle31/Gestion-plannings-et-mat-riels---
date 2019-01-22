<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '1234';
$db_name = 'chronos';

try{
    $strConnexion = 'mysql:host='.$db_host.';dbname='.$db_name;
    $pdo = new PDO($strConnexion, $db_user, $db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "connexion ok";

    }
catch(PDOException $e){
    $message = 'ERREUR PDO dans' . $e->getFile() . ' L.' .$e->getLine() .' : '.
    $e->getMessage();

    die($message);
    }

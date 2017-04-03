<?php
session_start();

 $host = "127.0.0.1"; 

$user = "root";

$pass = "";

$database = "tp_php";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
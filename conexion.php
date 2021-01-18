<?php

$server = 'localhost';
$usuario = 'root';
$pass = '';
$database = 'mylconsultores';


try {

$conexion= new PDO ("mysql:host=$server;dbname=$database;",$usuario, $pass);
$conexion->exec("SET CHARACTER SET utf8");


} catch (PDOException $e) {
die('fallo la conexion: ' .$e->getMessage());
echo'no hay conexion a base de datos';
}




 ?>
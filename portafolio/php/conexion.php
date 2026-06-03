<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "portafolio_luisa";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión");
}

?>
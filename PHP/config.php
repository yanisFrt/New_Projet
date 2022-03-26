<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "ourdb";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Erreur de connexion.')</script>");
}

?>

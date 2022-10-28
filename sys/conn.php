<?php
$host = "Localhost";
$user = "root";
$pass = "";
$dbname = "mmo";
$port = 3306;

//conexao com porta
$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass); 

//conexao sem porta
//$conn = new PDO("mysql:host=$host;dbname=".$dbname, $user, $pass);
?>
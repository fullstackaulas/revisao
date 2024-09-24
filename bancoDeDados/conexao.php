<?php

$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$database = 'aulaRevisao';

$host = $host . ':' . $port; 

// $host = 'localhost:3306'


$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>

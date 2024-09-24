<?php 
require "conexao.php";

$nome = $_GET["nome"];
$email = $_GET['email'];


$email = strtolower($email);

$sql = "insert into chamada(nome,email) VALUES('$nome', '$email')";

if($conn->query($sql)===TRUE) {
    echo "dado inserido";
}
else{
    echo "deu erro";
}


// print_r($resultado);


?>
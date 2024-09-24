<?php 
require "conexao.php";

$nome = 'Paulo';
$email = 'PAULO@UOL.COM.BR'; // supondo que este email veio $email = $_POST['email'];


$email = strtolower($email);

$sql = "insert into chamada(nome,email) VALUES('$nome', '$email')";

if($conn->query($sql)===TRUE) {
    echo "dado inserido";
}
else{
    echo "deu erro";
}


// print_r($resultado);

// http://localhost/revisao/bancoDeDados/insert.php

?>
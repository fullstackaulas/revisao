<?php 
require "conexao.php";

$sql = "select * from chamada";

$resultado = $conn->query($sql);

// print_r($resultado);

while($row = $resultado->fetch_assoc()) {
    print_r($row);
    echo "<br>";
}

// http://localhost/revisao/bancoDeDados/select.php

?>
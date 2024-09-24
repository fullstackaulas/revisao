<?php
// short if ou ternario
$informacoesGet = $_GET == [] ? "GET É VAZIO" : $_GET;
$informacoesPost = $_POST == [] ? "POST É VAZIO" : $_POST;


// if($_GET == []){
//     $informacoesGet = "GET É VAZIO";
// } else { 
//     $informacoesGet = $_GET;
// }

// if($_POST == []){
//     $informacoesPost = "GET É VAZIO";
// } else { 
//     $informacoesPost = $_POST;
// }

print_r($informacoesGet);

echo "<br><br><br>";

print_r($informacoesPost);


?>
<br><br><br>
<?php
//nada  so pra mostrar html no meio de php
?>
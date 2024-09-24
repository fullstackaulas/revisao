<?php
// sem funcao
// $valor1 = 10;
// $valor2 = 20;
// $resultado = $valor1 + $valor2;

// echo $resultado;

function somarValores($valor1, $valor2) {
    return $valor1 + $valor2;
}

function escreverSomarValores($valor1, $valor2) {
    echo $valor1 + $valor2;
}

echo somarValores(10,20); //processamento sera a mesma coisa que echo $valor1+$valor2 linha 10;

escreverSomarValores(10,20); 




?>


<script>
// sem funcao
// $valor1 = 10;
// $valor2 = 20;
// $resultado = $valor1 + $valor2;

// print($resultado);

somarValores = function($valor1, $valor2){
    return $valor1 +$valor2;
}

escreverSomarValores = function($valor1, $valor2) {
    print($valor1 + $valor2);
}

somarValores(10,20);

escreverSomarValores(10,20);

</script>
<?php
//Recivir el valor del Array:
$vector = array("valUno", "valDos", "valTres");

// Recorrer los elementos del Array, asignando cada elemento a una variable "$valor"
foreach ($vector as $valor){
    // Se asigna a $valor, el elemento actual de la matriz, (el puntero se mueve por uno) así q en la siguiente iteración del bucle, se asigna el siguiente valor de la matriz.
    echo $valor."<br>"; // Muestra cada elemento del array en cada iteración.
}

//Recibir la clave y el valor del Array:
$varArray = array(
    "valUno" => 1,
    "valDos" => 2,
    "valTres" => 3
);

// Asignar una variable para la clave y otra para el valor de cada elemento.
foreach ($varArray as $varClave => $varValor){
    echo  "$varArray[$varClave] => $varValor"  . "<br>"; // Mostrar de cada elemento su clave y valor.
}
    
?>
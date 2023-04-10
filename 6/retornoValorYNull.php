<?php 
function retorno($par_1, $par_2){
    // Cálculo de los dos parámetros
    $reslt = $par_1 * $par_2;
    return $reslt; // Retorna el valor de la variable
}
    
$par_1 = "6"; // Valor de parámetro 1
$par_2 = "3"; // Valor de parámetro 2
// Mediante la variable llamamos a función con sus parámetros
$reslt = retorno($par_1, $par_2); // reusltado 18
// Sacamos el resultado por pantalla
echo $reslt;


// No hay parámetro para el retorno
function campo(){
// Termina la ejecución y no hay valor de retorno
return;// Retorna NULL
}
// Devolver valor de la función campo()
echo gettype(campo());
?>
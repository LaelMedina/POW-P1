<?php

//Arreglo();
//Arreglo_Bidimensional();
//Arreglo_Bi2();
//Uso_break();
Uso_continue();

function Arreglo(){
    /*Declaramos todas nuestras variables fuera del bucle*/
    $valores = array(7, 19, 25, 12, 23, 15, 8, 16);
    
    $sum_valores=array_sum($valores);
    
    $frecuenciaAbAcumulada = 0;
    $sum_faa=0;
    $frecuenciaRelativa = 0;
    $sum_fr=0;
    $fr = 0;
    $frecuenciaRelativaAcumulada = 0;
    $sum_fra=0;

    /*Usaremos una variable para ir construyendo la tabla*/
    $tablaHTML="<table>";
    $tablaHTML.="<th>X</th>
    <th>Frecuencia absoluta</th>
    <th>Frecuencia absoluta acumulada</th>
    <th>Frecuencia relativa</th>
    <th>Frecuencia relativa acumulada</th>";

    /*Leemos las claves y valores del array. Usamos $k+1 para los números*/
    foreach ($valores as $k=>$v){
        /*Calculamos valores*/
        $contador=$k+1;
        $frecuenciaAbAcumulada += $v;
        $sum_faa+=$frecuenciaAbAcumulada;
        $fr = $v / $sum_valores;
        $frecuenciaRelativa = number_format(round($fr, 2, PHP_ROUND_HALF_UP),2);
        $sum_fr+=$fr;
        $frecuenciaRelativaAcumulada += $v / $sum_valores;
        $fra = number_format(round($frecuenciaRelativaAcumulada, 2, PHP_ROUND_HALF_UP),2);
        $sum_fra+=$fra;
        /*Agregamos valores a la tabla*/
        $tablaHTML.="<tr>";
        $tablaHTML.="<td>$contador</td>";
        $tablaHTML.="<td>$v</td>";
        $tablaHTML.="<td>$frecuenciaAbAcumulada</td>";
        $tablaHTML.="<td>$frecuenciaRelativa</td>";
        $tablaHTML.="<td>$fra</td>";
        $tablaHTML.="</tr>";
    }
    
    /*La línea de Totales la agregamos fuera del bucle*/
    $tablaHTML.="<tr class=\"total\">";
    $tablaHTML.="<td>Total</td>";
    $tablaHTML.="<td>$sum_valores</td>";
    $tablaHTML.="<td>$sum_faa</td>";
    $tablaHTML.="<td>$sum_fr</td>";
    $tablaHTML.="<td>$sum_fra</td>";
    $tablaHTML.="</tr>";
    $tablaHTML.="</table>";
    
    /*Imprimimos la tabla*/
    echo $tablaHTML;
}

function Arreglo_Bidimensional(){
    // ARRAYS MULTIDIMENSIONALES
    $multidimensional = array();
    $multidimensional [0][0] = "uno 0"; // Array 1
    $multidimensional [0][1] = "uno 1"; // Array 1
    $multidimensional [0][2] = "uno 2"; // Array 1
    $multidimensional [1][0] = "dos 0"; // Array interior
    $multidimensional [1][1] = "dos 1"; // Array interior
    // Recorrer el primer Array
    foreach ($multidimensional as $valor1) {

        // Recorrer el Array interior
        foreach ($valor1 as $valor2) {
            echo $valor2 . " <br />";
        }
    }
}

function Arreglo_Bi2(){
    $compra = array(
        array('Titulo' => "ROSA", 'Precio' => 1.25, 'Numero' => 14),
        array('Titulo' => "MARGARITA", 'Precio' => 0.75, 'Numero' => 21),
        array('Titulo' => "ORQUIDEA", 'Precio' => 1.15, 'Numero' => 7)
    );
    
    // Mostrar estructura de tabla
    echo "<table border='4'>";
    echo "<thead> <tr> <th colspan='3'>FLORISTERIA</th> </tr>";
    echo "<tr> <td></td> <td>COSTES</td> <td>CANTIDAD</td>
    </tr> </thead> ";
    echo "<tbody>";
    echo "<tr>";

    for ($fila = 0; $fila < 3; $fila++){
        echo "<td>" . $compra[$fila]["Titulo"] . "</td>" .
        "<td> " . $compra[$fila]["Precio"] . "</td>" .
        "<td> " . $compra[$fila]["Numero"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

}

function Uso_break(){
    $salirBucle = array(
        0 => 'madrugada', 
        1 => 'mañana', 
        2 => 'mediodia',
        3 => 'tarde', 
        4 => 'noche', 
        5 => 'ocaso', 
        6 => 'crepúsculo'
    );
    
    echo "La sentencia break nos hace salir del bucle en la vuelta del valor 'noche' <br>";

    foreach($salirBucle as $valSalBucle){
        // Si valor es 'noche' sale del bucle
        if($valSalBucle == 'noche'){
            break;
        }
        echo $valSalBucle . "<br>";
    }
    
}

function Uso_continue(){
    $saltarIteracion = array(
        0 => 'madrugada', 
        1 => 'mañana', 
        2 => 'mediodia',
        3 => 'tarde', 
        4 => 'noche', 
        5 => 'ocaso', 
        6 => 'crepúsculo'
    );
    
    //"La sentencia continue salta la iteración en la vuelta indicada y sigue mostrando el resto de los elementos de la matriz.";
    /*
        madrugada
        mañana
        mediodia
        tarde
    */
    foreach($saltarIteracion as $valSaltVuelta){
    // Si valor es 'noche' salta esta iteración y continua.
    if($valSaltVuelta == 'noche'){
        continue;
    }
    echo $valSaltVuelta . "<br>";
    }
}

?>
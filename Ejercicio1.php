<?php 
    echo "<h1>1. Tipo de datos y variables</h1>";

    $var ='Juan'; // se puede expresar una cadena utilizando comillas simples
    
    $nombre = "Pablo"; //se puede expresar una cadena con comillas dobles
    
    echo "$var, $nombre"; //imprime el contenido de $var y $nombre
    
    $_saldo1=9.5;
    // $salario diferente $SALARIO cada una almacenará un contenido diferente.
    //$_NULL, pero no debe ser una palabra reservada, por ejemplo $NULL.
    //$5saldo=10; // esto genera un error, porque es un nombre de variable no válido, comentar para ver la siguiente línea
    
    $_NULL='vacio'; // tiene la palabra reservada NULL, pero está contenida dentro un nombre válido de variable
    
    echo '<br>'.$_NULL;
?>
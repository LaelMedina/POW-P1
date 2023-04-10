<?php
    echo '<h1>2. Constantes</h1>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp; Ejercicio #2';
    echo '<center> <h4>Ejemplos de Constantes</h4> </center>';

    echo '<div align="center">';

        define('IVA',12);
        echo 'IVA: ' . IVA ."<br/>";
        define('iva12%',12); //% incorrecto, ya que en cuanto al nombrado siguen la misma especificación que una variable
        //echo iva12%; //manda error por lo antes descrito
        define("_iva", 25);// no arroja errores, pero por convención se debe escribir en mayúscula
        define("SALARIO","100"); // esta constante se toma como cadena o entero dependiendo el caso
        echo "_iva: ". _iva ."<br/>";
        echo 'Salario: '. SALARIO. "<br/>";
        const PRECIO=50;
        const NUMEROS=array(1,2,5,6);

        echo 'Precio: ' . PRECIO.'<br>';
        echo 'Arreglo NUMERO: '. NUMEROS[2].'<br>';

    echo '</div>';

?>

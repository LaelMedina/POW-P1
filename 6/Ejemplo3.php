<html>
    <head>
        <title>funcion 1</title>
    </head>
<body>
<?php
function escribe_separa($cadena){
    for ($i=0;$i<strlen($cadena);$i++){
        echo $cadena[$i];
    
        if ($i<strlen($cadena)-1){
            echo "-";
        }
        /* Obtenemos el numero de caracteres de la cadena, luego usando la variable $i 
        iremos recoriendo caracter a caracter dicha cadena, mientras $i tenga un valor menor
        a la cantidad de caracteres de la cadena, imprimiremos el caracter '-' */
    }
}
escribe_separa("hola");
echo "<p>";
escribe_separa("Texto mas largo, a ver lo que hace");
?>
</body>
</html>

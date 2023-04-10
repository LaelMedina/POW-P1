<?php 
// ESTA ES LA DEFINICIÓN DE LA FUNCIÓN calculaHipotenusa
function calculaHipotenusa($arg1, $arg2){
    $hipotenusa = sqrt($arg1 * $arg1 + $arg2 * $arg2);
    return $hipotenusa;
}

//No se pueden definir dos funciones con el mismo nombre.
// ESTO ES UN EJEMPLO DE USO DE LA FUNCIÓN calculaHipotenusa
$cateto1 = 12;
$cateto2 = 16;

// PHP no distingue entre mayúsculas y minúsculas en los nombres de las funciones.
$hipotenusa = CALCULAHIPOTENUSA($cateto1, $cateto2);

print "<p>El triángulo de lados $cateto1, $cateto2 \n";
print "y $hipotenusa es rectángulo.</p>\n";

//El triángulo de lados 12, 16 y 20 es rectángulo.
?>



<?php
$array[0] = 9;
$array[1] = 25;

function sqrt_array($input) {
    $input[0] = sqrt($input[0]);
    $input[1] = sqrt($input[1]);
    echo '$input[0]= '.$input[0]." - ".'$input[1]= '.$input[1]."<br />";
}

sqrt_array($array);
// mostrara "$input[0]= 3 - $input[1]= 5"
echo '$array[0]= '.$array[0]." - ".'$array[1]= '.$array[1];
// mostrara "$array[0]= 9 - $array[1]= 25"
?>
<?php

function hacercafe ($tipo = "cappucino") {
    return "hacer una taza de ".$tipo."<br>";
}

echo hacercafe ("espresso");
// mostrara "Hacer una taza de espresso"
echo hacercafe ();
// mostrara "Hacer una taza de cappucino"
?>
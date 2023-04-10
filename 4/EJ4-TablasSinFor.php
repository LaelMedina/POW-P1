<?php
//Creando tablas sin for
echo "
    <table border='1'>
        <caption>Titulo de la tabla</caption>
    <tr>
        <th>Col.Cab.1</th>
        <th>Col.Cab.2</th>
    </tr>

    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>

    </table>
";

//Ejemplo de tabla usando for
echo "
    <table border='2'>
        <caption>Titulo de la tabla usando for <br><br></caption>
    <tr>
"; 

for ($tc=0; $tc<10; $tc++):
    echo "<th>Columna".$tc."</th>"; //titulo de columnas
endfor;

echo "</tr>";

//iniciamos celdas
for ($i=0; $i<10; $i++) { //fila
    echo "<tr>";

    for ($j=0; $j <10 ; $j++) { //columna
        echo "<td>Celda".$i.$j."</td>";
    }
    echo "</tr>"; //fin fila
}
echo "</table>";
?>

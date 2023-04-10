<?php 
    echo "<h1>4. Estructuras de control</h1>";
    devuelve_valor_vuelta();

    function devuelveHora(){
        echo "<h3>Primer Ejemplo</h3>";
        $tiempo = date("H"); // Según la hora del día, lanza un mensaje u otro.
        // date(“H”) puede regresar una hora distinta, y esto se debe al horario del servidor.
        //Se puede corregir en xampp/php/ php.ini (opciones de configuración )
        // y reemplazar el timezone por date.timezone= America/Managua las veces que aparezca.
        if($tiempo > "6" && $tiempo < "14"){ // Si son entre las 6 y las 14 horas
            echo "Buenos días!";
        }
        else if($tiempo > "14" && $tiempo < "20"){ // Si son entre las 14 y las 20 horas.
            echo "Buenas tardes!";
        }
        else if($tiempo > "20" && $tiempo < "6"){ // Si son entre las 20 y las 6 horas.
            echo "Buenas noches!";
        }

        echo "<br>Hora actual: <strong> " . $tiempo . "</strong>";
    }

    function evaluar(){
        echo "<h3>Segundo Ejemplo</h3>";
        $precden1 = 3;
        $precden2 = 4.5;
        // En este caso la evaluación es True
        if($precden1 == 3){
            echo "La evaluación fue verdadera <br>";
        }
        
        // En este caso la evaluación es True. Se utiliza una expresión compuesta
        if(($precden1 == 3) and ($precden1 >= $precden2 or $precden2 > 4.4)){
            echo "2. La evaluación fue verdadera <br>";
        }

        // En este caso la evaluación es False pero como se usa el operador! False
        // se transforma en True y por lo tanto se ejecuta la sentencia interna al if
        if( ! (($precden2 > 10) or ($precden1 == 3 and $precden1 >= $precden2))){
            echo "3. La evaluación fue verdadera <br>";
        }
    }

    function altern_if(){
        /* Alternativa de llaves "{}" if else ==> ":" (dos puntos), endif
        La alternativa consiste en reemplazar el uso de la llave de apertura de bloque por dos
        puntos (:) y la llave de cierre de bloque por la palabra clave end + nombre de estructura
        de control (endif, endwhile, endforeach, endfor, endswitch). */

        echo "<h3>Tercer Ejemplo</h3>";
        
        $alternif = "Quim";
        if($alternif === "quim"): //dos puntos de apertura
            echo "Nombre equivocado!";
        elseif($alternif === "qUIm"):
            echo "Nombre equivocado!";
        elseif($alternif === "quiM"):
            echo "Nombre equivocado!";
        elseif($alternif === "Quim"):
            echo "Nombre correcto!"; // expresión idéntica
        else:
            echo "Nombres incorrectos!";
        endif; //expresion de cierre
    }

    function bucle_while(){
        echo "<h3>Cuarto Ejemplo</h3>";

        $arrayFrutas = array("naranja", "plátano", "manzana", "sandia");
        $i = 0;
        $c = count($arrayFrutas);
        // Mientras ($i = 0) sea menor que número de índices del array ...
        
        while ($i < $c) {
            $a = $arrayFrutas[$i]; // irá mostrando sus elementos.
            echo $i . "/ " . $a . "<br>"; // Muestra el índice y valor correspondiente al índice.
            $i++; // Incrementa el número del índice hasta
            // igualar número de índices de array, entonces se
            // deja de cumplir la condición y sale de la sentencia.
        }

    }

    function bucle_DoWhile(){
        echo "<h3>Quinto Ejemplo</h3>";

        $varDo = 0;
        $varCont = 0;
        // Hacer que ...
        do{
            // se incremente en "1" el valor de estas variables.
            $varDo++;
            $varCont++;
            // Mostrar por pantalla ...
            echo $varCont . "o do, vale ==> " . $varDo . "<br>";
            }
            // mientras que el valor sea inferior o igual a "3".
        while ($varDo <= 3 && $varCont <= 3); // Muestra 4 veces el mensaje.
    }

    function sentencia_switch(){
        echo "<h3>Sexto Ejemplo</h3>";

        $micolor = "azul";
        switch ($micolor):
            case "rojo":
                echo "Tu color favorito es el rojo";
            break;
            case "amarillo":
                echo "Tu color favorito es el amarillo";
            break; 
            case "verde":
                echo "Tu color favorito es el verde";
            break;
            case "azul": // Se cumple la condición
                echo "Tu color favorito es el" . $micolor;
            break; // Deja de evaluar el resto de sentencias case
        
        // Si no se cumple la condición en ninguna sentencia "switch", sale del bucle con el siguiente mensaje
        default;
            echo "Tu color favorito no es ni rojo, ni amarillo, ni verde, ni azul";
        endswitch;
    }

    //primer ejemplo con bucle for
    function bucle_for(){
        // parame_1 || parame_2 || parame_3
        for ($varFor=1; $varFor<=3; $varFor++)
        {
            // Se repetirá hasta cumplir el 2º parámetro
            echo $varFor . "a vuelta de for ==> " . $varFor . "<br>";
        }
    }
    //segundo ejemplo con bucle for
    function imprime_valor_caso (){
        for ($for1 = 3; $for1 >= 1; $for1--){
            // Muestra en decremento los valores: 3, 2, 1
            echo "Caso 1: " . $for1."<br>";
        }
            
        echo "<hr/> <hr/>";
            // Caso 2:
            //Sin la 1ª expresión, no hay inicialización (se hace antes)
        $for1 = 3; // Inicializar variable.
        for (; $for1 >= 1; $for1--){
            // Muestra en decremento los valores: 3, 2, 1
            echo "Caso 2: " . $for1."<br>";
        }
            
        echo "<hr/> <hr/>";
            
        // Caso 3:
        //Sin la 2ª expresión, no hay (control de bucle)
        for ($for1 = 3; ;$for1--){
            // Al no haber 2ª expresión, debe haber una sentencia break para que no haya bucle infinito.
            // Entrará en sentencia "if" cuando "$for1" sea igual a 2
            if ($for1 == 2){
                echo "Caso 3: Sale por sentencia break"."<br>";
                break;
            }
        // "$for1" al decrementar, primero vale "3", luego "2"
        echo "Caso 3: " . $for1."<br>";
        }
        
        echo "<hr/> <hr/>";
            
        // Caso 4:
        // Sin las 3 expresiones, no hay expresiones explícitas en la sentencia for: se omiten las tres expresiones.
        // La expresión de inicialización: se omite, por lo que la variable será cero "0" (o el valor que traiga de antes)
        // La expresión de control de bucle: se define dentro del bloque en este caso es if ($for2 == 2).
        // La expresión de incremento/decremento: se omite, por lo que dentro del bloque se incluye la sentencia ++$for2.
        
        $for2=0;
        for (;;){
            // Al no haber 2ª expresión, debe haber una sentencia break para que no haya bucle infinito.
            // Entrará en sentencia "if" cuando "$for2" sea igual a 2
            if ($for2 == 2){
                echo "Caso 4: sale por sentencia break"."<br>";
                break;
            }
            // Primero "$for2" vale "1", y "2" en la siguiente iteración.
            echo "Caso 4: " . ++$for2."<br>";
        }
            
        echo "<hr/> <hr/>";
        echo "<br>";
        // Caso 5:
        // Sintaxis alternativa (sin llaves de apertura y cierre) 
                
        for ($for1 = 3; $for1 >= 1; $for1--):
            // Mediante "$for1--", decremento, inicializa una cuenta atrás.
            echo "Caso 5: " . $for1."<br>"; // Muestra 3, 2, 1
        endfor;
        echo "<hr/> <hr/>";
    }
    
?>
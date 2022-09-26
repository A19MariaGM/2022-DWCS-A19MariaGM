<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 3_8</title>
</head>

<body>
    <?php
    // Apartado 1 y 2: creación de array con 30 posicións, con números ó azar entre 0 e 20 incluidos
    echo "Apartados 1 e 2 <br>";
    function FacerArrai($posicions, $limiteAnterior, $limitePosterior)
    {

        for ($j = 0; $j <= ($posicions - 1); $j++) {
            $resultados[$j] = rand($limiteAnterior, $limitePosterior);
        }

        return $resultados;
    }

    $arrais = FacerArrai(30, 0, 20);

    foreach ($arrais as $arrai) {
        echo  $arrai . "\n";
    }
    echo "<br>";

    // Apartado 3: Crear un array con los siguientes datos: Batman, Superman, Krusty, Bob, Mel y Barney.
    echo "<br>Apartado 3<br>";
    $personajes = "Batman, Superman, Krusty, Bob, Mel, Barney";
    $elementos  = explode(", ", $personajes);
    print_r($elementos);
    echo "<br><br>";

    //Apartado 4: Borrar la última posición del array (utilizar funciones de array).
    echo "Apartado 4<br>";
    array_pop($elementos);
    print_r($elementos);
    echo "<br><br>";

    //Apartado 5: Imprimir la posición dónde se encuentra la cadena Superman (utilizar funciones de array).
    echo "Apartado 5";
    echo "<p> La posición donde se encontra a cadea Superman é: " . array_search("Superman", $elementos) . "</br>";
    echo "<br>";

    //Apartado 6: Añadir los siguientes elementos al final del array: Carl, Lenny, Burns y Lisa (utilizar funciones de array).
    echo "Apartado 6<br>";
    array_push($elementos, "Carl", "Lenny", "Burns", "Lisa");
    print_r($elementos);
    echo "<br><br>";

    //Apartado 7: Ordenar los elementos del array e imprimir el array ordenado (utilizar funciones de array).
    echo "Apartado 7<br>";
    sort($elementos);
    echo "O array resultante e (";
    print_r($elementos);
    echo "<br><br>";


    /*$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "purple", "b" => "orange");
    array_splice($a1, 0, 2, $a2);*/

    //Apartado 8: Borrar desde la posición 4 (incluída) 2 elementos (utilizar funciones de array).
    echo "Apartado 8<br>";
    /*$index = 4;

    for ($cont = 1; $cont < 2; $cont++) {
        array_splice($elementos, $index);
        $index++;
    }*/
    print_r($elementos);
    echo "<br><br>";

    //Apartado 9: Añadir los siguientes elementos al comienzo del array: Manzana, Melón, Sandía (utilizar funciones de array).
    echo "Apartado 9<br>";
    array_unshift($elementos, "Manzana", "Melón", "Sandía");
    print_r($elementos);
    echo "<br><br>";

    //Apartado 10: Crear una copia del array con el nombre "micopia" con los elementos 3 al 5 (utilizar funciones de array).
    echo "Apartado 10<br>";
    //$micopia = 
    print_r($elementos);
    echo "<br><br>";

    //Apartado 11: Añadir el elemento "pera" al final del array (utilizar funciones de array).
    echo "Apartado 11<br>";
    array_push($micopia, "pera");
    print_r($elementos);
    echo "<br><br>";

    //Apartado 12:Crear un array con el primer array concatenado al array "micopia" (utilizar funciones de array).
    echo "Apartado 12<br>";
    $finalArray = array_merge($elementos, $micopia);
    print_r($elementos);
    echo "<br><br>";
    ?>

</body>

</html>
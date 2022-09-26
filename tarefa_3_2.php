<!DOCTYPE html>

<head>
    <tittle>Tarefa_3_2</tittle>
</head>

<body>
    <h1>Potencia con función</h1>
    <?php

    function potencia($base, $exponente)
    {
        $res = $base ** $exponente;
        return $res;
    }
    $base = 5;
    $exponente = 2;
    echo "<h3> The result e " . potencia($base, $exponente) . "</h3>";
    ?>
</body>

</html>_
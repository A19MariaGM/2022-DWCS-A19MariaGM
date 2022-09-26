<!DOCTYPE html>

<head>
    <tittle>Tarefa_3_1</tittle>
</head>

<body>
    <h1>Factorial con función</h1>
    <?php

    function factorial(int $num)
    {
        $res = 1;
        for ($i = $num; $i > 1; $i--) {
            $res = $res * $i;
        }
        return $res;
    }
    $num = 5;
    echo "<h3> The result e " . factorial($num) . "</h3>";
    ?>
</body>

</html>_
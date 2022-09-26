<!DOCTYPE html>

<head>
    <tittle>Tarefa_3_1</tittle>
</head>

<body>
    <h1>Factorial con función</h1>
    <?php

    declare(strict_types=1);
        function factorial(int $num): int
        {
            if ($num > 0) {
                $res = 1;
                for ($i = $num; $i > 1; $i--) {
                    $res = $res * $i;
                }
            else{ $res = -1;}
            return $res;
        }
    $num = 5;
    echo "<h3> The result e " . factorial($num) . "</h3>";
    ?>
</body>

</html>_
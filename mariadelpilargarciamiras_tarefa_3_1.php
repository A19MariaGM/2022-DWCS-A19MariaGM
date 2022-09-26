<!DOCTYPE html>

<head>
    <tittle>Tarefa_3_1</tittle>
</head>

<body>
    <h1>Factorial</h1>
    <?php
    define("num", 5); // i´ll calculate its factorial
    $factorial = 1;
    for ($i = num; $i > 1; $i--) {
        $factorial = $factorial * $i;
    }
    echo "<h3>The result e " . $factorial . "</h3>";
    ?>
</body>

</html>_
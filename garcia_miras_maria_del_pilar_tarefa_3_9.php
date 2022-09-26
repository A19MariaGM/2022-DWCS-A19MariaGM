<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa_3_9</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        Producto:<br><input type="radio" name="producto" value="Coke">"Coke"<br>
        <input type="radio" name="producto" value="Pepsi">Pepsi<br>
        <input type="radio" name="producto" value="Orange">Orange<br>
        <input type="radio" name="producto" value="Apple juice">Apple juice<br>
        Cantidad:<input type="text" name="cantidad">
        <input type="submit" value="Enviar">
    </form>

    <?php
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $preciosProductos = array("Coke" => 4, "Pepsi" => 3, "Orange" => 2, "Apple" => 1);


    echo $cantidad . " de " . $producto . " cústanche " . $preciosProductos[$producto] * $cantidad . " euros";
    ?>

</body>

</html>
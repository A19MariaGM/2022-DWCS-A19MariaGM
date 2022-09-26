<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa_3_7</title>
</head>

<body>

    <?php
    $elemento1 = array(
        "name" => "John",
        "email" => "john@demo.com",
        "website" => "www.john.com",
        "age" => 22,
        "password" => "pass"
    );

    $elemento2 = array(
        "name" => "anna",
        "email" => "anna@demo.com",
        "website" => "www.anna.com",
        "age" => 24,
        "password" => "pass"
    );

    $elemento3 = array(
        "name" => "Peter",
        "email" => "anna@peter.com",
        "website" => "www.peter.com",
        "age" => 42,
        "password" => "pass"
    );

    $elemento4 = array(
        "name" => "Max",
        "email" => "anna@demo.com",
        "website" => "www.anna.com",
        "age" => 33,
        "password" => "pass"
    );

    $arrayTotal = array(
        "John" => $elemento1,
        "Anna" => $elemento2,
        "Peter" => $elemento3,
        "Max" =>   $elemento4
    );

    foreach ($arrayTotal as $nome => $arrai) {

        echo "<ul>";
        foreach ($arrai as $titulo => $valor) {
            echo "<li>" . $titulo . ":" . $valor . "</li>";
        }
        echo "</ul>";
    }


    ?>
    </table>
</body>

</html>
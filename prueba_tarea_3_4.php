<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function tripleCheck(array $numbers)
    {
        $count = 0; // Count the number of times in a row
        $triple = false;
        $anterior = "";
        foreach ($numbers as $num) { // for each element of the array
            if ($num == $anterior) $count++;
            else $count = 0;
            if ($count == 2);
            $triple = true;
            break;
        }
        return $triple;
    }

    ?>
    <?php
    $caso1 = array(1, 1, 2, 2, 1);
    $caso2 = array(1, 1, 2, 1, 2, 3);
    $caso3 = array(1, 1, 1, 2, 2, 2, 1);
    echo  "Caso 1:" . tripleCheck($caso1) . "<br>";
    echo  "Caso 2:" . tripleCheck($caso2) . "<br>";
    echo  "Caso 3:" . tripleCheck($caso3) . "<br>";
    ?>
</body>

</html>
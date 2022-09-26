<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa_3_4</title>
</head>

<body>
    <?php

    function triple(array $numbers)
    {

        foreach ($numbers as $numbers) {
            $arraylength = count($numbers);

            for ($i = 0; $i <= $arraylength; $i++) {
                if (($numbers[i] == $numbers[i + 1]) and ($numbers[i + 1] == $numbers[i + 2])) {
                }
            }
        }
        return true;
    }

    $numbers = array(1, 1, 2, 2, 1);

    echo "<h3> O array" . $numbers . "ten triple valores" . $triple($numbers) . "</h3>";
    ?>
</body>

</html>
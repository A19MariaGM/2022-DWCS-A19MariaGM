<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa_3_6</title>
</head>

<body>
    <?php


    ?>

    <table>
        <tr>
            <th>Cidade</th>
            <th>Pais</th>
            <th>Continente</th>
        </tr>
        <?php
        $informacions = "Tokyo,Japan,Asia;Mexico City,Mexico,America;New York City,USA,America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,America;Cairo,Egypt,Africa;London,UK,Europe";
        $paises = explode(";", $informacions);
        foreach ($paises as $paise) {
            $elementos = explode(",", $paise);
            foreach ($elementos as $elemento) {
                echo "<tr><td>" . $elementos[0] . "<td></td>" . $elementos[1] . "<td></td>" . $elementos[2] . "<td></tr>";
            }
        }

        ?>
    </table>
</body>

</html>
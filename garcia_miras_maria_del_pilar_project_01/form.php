<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    $name = $surnames = $photo = $suscription = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name =
                test_input($_POST["name"]);
        }

        if (empty($_POST["name"])) {
            $surnamesErr = "Surnames are required";
        } else {
            $surnames =
                test_input($_POST["surnames"]);
        }

        if (empty($_POST["photo"])) {
            $photoErr = "Photo is required";
        } else {
            $photo =
                test_input($_POST["photo"]);
        }

        if (empty($_POST["suscription"])) {
            $suscriptionErr = "Suscription is required";
        } else {
            $suscription =
                test_input($_POST["suscription"]);
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Rellena tu CV</h1>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <span class="error"><?php echo $nameErr; ?></span><br>

        <label for="surnames">Surnames:</label>
        <input type="text" id="surnames" name="surnames" value="<?php echo $surnames; ?>"><br>
        <span class="error"><?php echo $surnames; ?></span><br>

        <input type="checkbox" name="suscription" value="news">Suscript to the news bulliton:<br>
        <span class="error"><?php echo $suscriptionErr; ?></span>

    </form>
</body>

</html>
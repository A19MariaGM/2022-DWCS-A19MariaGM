<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa_3_9</title>

</head>

<body>
    <?php
    $quantity = $drink = "";
    $price = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $drink = test_input($_POST["drink"]);
        if (empty($_POST["quantity"])) {
            $price = 0;
            $nameErr = "Quantity is required";
        } else {
            $quantity =
                test_input($_POST["quantity"]);
        }
        switch ($drink) {
            case "Coke":
                $price = $quantity * 1;
                break;
            case "Pepsi":
                $price = $quantity * 0.8;
                break;
            case "Orange":
                $price = $quantity * 0.9;
                break;
            case "Apple juice":
                $price = $quantity * 1.1;
                break;
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <select name="drink">
            <option value="" selected="selected">--Choose a drink--</option>
            <option value="Coke">Coke<br></option>
            <option value="Pepsi">Pepsi<br></option>
            <option value="Orange">Orange<br></option>
            <option value="Apple juice">Apple juice<br></option>
        </select>
        <label for="quantity">Quantity</label>
        <input type="text" id="quantity" name="quantity">
        <input type="submit" value="enviar">
    </form>
    <?php
    echo "You have asked for " . $quantity . " bottles of " . $drink . ". Total price to pay: " . $price . " euros";
    ?>

</body>

</html>
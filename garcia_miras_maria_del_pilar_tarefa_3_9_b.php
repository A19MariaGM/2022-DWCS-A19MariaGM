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
        <select name="drink">
            <option value="Pepsi">Coke<br></option>
            <option value="Pepsi">Pepsi<br></option>
            <option value="Pepsi">Orange<br></option>
            <option value="Pepsi">Apple<br></option>
        </select>
        <label for="idQuantity">Quantity</label>

    </form>

    <?php

    if ($SERVER["REQUEST_"] == "POST") {

        $quantity = $drink = "";
        $price = 0;
    }
    //if(empty($_POST["quantity"])){
    //$nameErr = 
    //}



    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    $drink = test_input($POST["drink"]);
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

    // echo  
    ?>
</body>

</html>
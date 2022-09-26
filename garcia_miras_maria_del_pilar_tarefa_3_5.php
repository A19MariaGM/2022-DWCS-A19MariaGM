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
        //Función que chequea un string e devolve un substring
        function deleteBlanks($cadea){
            $novaCadea = preg_replace("/ \s/,"", $cadea);
            return $novaCadea;
        }
    $texto = "Traballando con strings";
    deleteBlanks($texto);
    echo "<h3>" .deleteBlanks($texto). "<h3>";
    ?>
</body>
</html>
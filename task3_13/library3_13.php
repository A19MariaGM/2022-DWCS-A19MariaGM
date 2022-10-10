<!--García Mirás, María del Pilar-->

<!--Difference between include and require: if you write include a file, if php doesn't find the file the script will continue to execute, with require the echo statement will not be executed because the script execution dies after the require statement returned a fatal error -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Web Portal - Includes and requires</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

    <div id="header" class="container">

        <?php
        include 'logo.php';
        include 'menu.php';
        ?>


    </div>

    <div id="pictures">

        <?php
        include 'pictures.php';
        ?>
        <br class="clear" />

    </div>

    <div id="page">
        <div id="bg1">
            <div id="bg2">
                <div id="bg3">

                    <?php
                    include 'content.php';
                    include 'sidebar.php';
                    ?>



                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>


</body>

</html>
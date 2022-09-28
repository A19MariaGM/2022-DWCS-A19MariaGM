<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 3_10</title>
</head>

<body>

    <?php
    //inicializo as variables do formulario
    $usernameErr = $passwordErr = $cityEmploymentErr = $serversErr = $roleErr = $signErr = "";
    $username = $password = $cityEmployment = $servers = $role = $sign = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username =
                test_input($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password =
                test_input($_POST["password"]);
        }

        if (empty($_POST["cityEmployment"])) {
            $cityEmploymentErr = "cityEmployment is required";
        } else {
            $cityEmployment =
                test_input($_POST["cityEmployment"]);
        }

        if (empty($_POST["servers"])) {
            $serversErr = "Server is required";
        } else {
            $servers =
                test_input($_POST["servers"]);
        }

        if (empty($_POST["role"])) {
            $roleErr = "Role is required";
        } else {
            $role =
                test_input($_POST["role"]);
        }

        if (empty($_POST["sign"])) {
            $signErr = "sign is required";
        } else {
            $sign =
                test_input($_POST["sign"]);
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
        <table>

            <h1>Novell Services Login<h1>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>"><br>
                    <span class="error"><?php echo $usernameErr; ?></span><br>

                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" value="<?php echo $password; ?>"><br>
                    <span class="error"><?php echo $passwordErr; ?></span><br>

                    <label for="cityEmployment">City of Employment:</label>
                    <input type="text" id="cityEmployment" name="cityEmployment" value="<?php echo $password; ?>"><br>
                    <span class="error"><?php echo $cityEmploymentErr; ?></span><br>


                    <label for="servers">Web server:</label>
                    <select id="servers" name="servers">
                        <option value=""> --Choose a server--</option>

                        <option value="server1" <?php if (isset($severs) && $servers == "server1") echo "selected"; ?>>Apache</option>
                        <option value="server2"><?php if (isset($severs) && $servers == "server2") echo "selected"; ?>>Nginx</option>
                        <option value="server3"><?php if (isset($severs) && $servers == "server3") echo "selected"; ?>>LiteSpeed</option>
                        <option value="server4"><?php if (isset($severs) && $servers == "server4") echo "selected"; ?>>Microsoft IIS</option>

                    </select><br>
                    <span class="error"><?php echo $serversErr; ?></span>



                    Please specify your role:
                    <input type="radio" name="role" <?php if (isset($role) && $role == "admin") echo "checked"; ?> value="admin">Admin<br>
                    <input type="radio" name="role" <?php if (isset($role) && $role == "engineer") echo "checked"; ?> value="engineer">Engineer<br>
                    <input type="radio" name="role" <?php if (isset($role) && $role == "manager") echo "checked"; ?> value="manager">Manager<br>
                    <input type="radio" name="role" <?php if (isset($role) && $role == "guest") echo "checked"; ?>value="guest">Guest<br>
                    <span class="error"><?php echo $rollErr; ?></span><br>

                    Single Sign-on to the following:
                    <input type="checkbox" id="sign1" name="sign1" <?php if (isset($sign1) && $signo1 == "Mail") echo "checked"; ?> value="Mail">Mail<br><br>
                    <input type="checkbox" id="sign2" name="sign2" <?php if (isset($sign2) && $signo2 == "Payroll") echo "checked"; ?>value="Payroll"><br><br>
                    <input type="checkbox" id="sign3" name="sign3" <?php if (isset($sign3) && $signo3 == "Self-service") echo "checked"; ?>value="Self-service"><br>
                    <span class="error"><?php echo $signError; ?></span>

                    <input type="submit" value="Login">
                    <input type="reset" value="Reset">

        </table>
    </form>
    <?php
    echo "
        <ul>
            <li>$username</li><br>
            <li>$password</li><br>
            <li>$cityEmployement</li><br>
            <li>$servers</li><br>
            <li>$role</li><br>
            <li>$sign</li><br>
        </ul>
        ";
    ?>
</body>

</html>
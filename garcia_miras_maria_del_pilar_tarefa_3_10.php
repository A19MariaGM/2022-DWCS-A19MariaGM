<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 3_10</title>
    <style>
        .col1 {
            width: 100px;
        }

        .col2 {
            width: 300px;
        }
    </style>
</head>

<body>

    <?php
    //inicializo as variables do formulario
    $username = $password = $cityEmployment = $servers = $role = $sign = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $nameErr = "Username is required";
        } else {
            $username =
                test_input($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $nameErr = "Password is required";
        } else {
            $password =
                test_input($_POST["password"]);
        }

        if (empty($_POST["cityEmployment"])) {
            $nameErr = "cityEmployment is required";
        } else {
            $cityEmployment =
                test_input($_POST["cityEmployment"]);
        }

        if (empty($_POST["servers"])) {
            $nameErr = "Server is required";
        } else {
            $servers =
                test_input($_POST["servers"]);
        }

        if (empty($_POST["role"])) {
            $nameErr = "Role is required";
        } else {
            $role =
                test_input($_POST["role"]);
        }

        if (empty($_POST["sign"])) {
            $nameErr = "sign is required";
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
            <tr>
                <th colspan="2">Novell Services Login</th>
            </tr>
            <tr>
                <td class="col1"><label for="username">Username:</label></td>
                <td class="col2"> <input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td class="col1"><label for="password">Password:</label></td>
                <td class="col2"><input type="text" id="password" name="password"></td>
            </tr>
            <tr>
                <td class="col1"><label for="cityEmployment">City of Employment:</label></td>
                <td class="col2"><input type="text" id="cityEmployment" name="cityEmployment"></td>
            </tr>
            <tr>
                <td class="col1"><label for="servers">Web server:</label></td>
                <td class="col2">
                    <select id="servers" name="servers">
                        <option value="" selected="selected">--Choose a server--</option>
                        <option value="apache">Apache</option>
                        <option value="nginx">Nginx</option>
                        <option value="litespeed">LiteSpeed</option>
                        <option value="microsoft iis">Microsoft IIS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="col1">Please specify your role:</td>
                <td class="col2">
                    <ul style="list-style-type: none; padding:0px;">
                        <li><input type="radio" name="role" value="admin">Admin</li>
                        <li><input type="radio" name="role" value="engineer">Engineer</li>
                        <li><input type="radio" name="role" value="manager">Manager</li>
                        <li><input type="radio" name="role" value="guest">Guest</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="col1">Single Sign-on to the following:</td>
                <td class="col2">
                    <ol style="list-style-type: none; padding:0px;">
                        <li><input type="checkbox" id="sign1" name="sign" value="Mail">
                            <label for="sign1">Mail</label><br>
                        </li>
                        <li><input type="checkbox" id="sign2" name="sign" value="Payroll">
                            <label for="sign2">Payroll</label><br>
                        </li>
                        <li><input type="checkbox" id="sign3" name="sign" value="Self-service">
                            <label for="sign3">Self-service</label><br>
                        </li>
                    </ol>
                </td>
            </tr>
            <tr style="text-align:center">
                <td colspan="2">
                    <input type="submit" value="Login">
                    <input type="reset" value="Reset">
                </td>
            </tr>

        </table>
    </form>
    <?php
    echo $username . ", " . $password . ", " . $cityEmployment . ", " . $servers . ", " . $role . ", " . $sign;
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 3_10</title>
    <style>
        table {
            border: #b2b2b2 1px solid;
        }

        td,
        tr {
            border: #b2b2b2 1px solid;
        }

        .col1 {
            width: 100px;
        }

        .col2 {
            width: 300px;
        }
    </style>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
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
                <td class="col2"><input type="text" id="cityEmployement" name="cityEmployement"></td>
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
                        <li><input type="radio" name="admin" value="admin">Admin</li>
                        <li><input type="radio" name="engineer" value="engineer">Engineer</li>
                        <li><input type="radio" name="manager" value="manager">Manager</li>
                        <li><input type="radio" name="guest" value="guest">Guest</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="col1">Single Sign-on <br> to the following::</td>
                <td class="col2">
                    <ol style="list-style-type: none; padding:0px;">
                        <li><input type="checkbox" id="sign1" name="sign1" value="Mail">
                            <label for="sign1">Mail</label><br>
                        </li>
                        <li><input type="checkbox" id="sign2" name="sign2" value="Payroll">
                            <label for="sign2">Payroll</label><br>
                        </li>
                        <li><input type="checkbox" id="sign3" name="sign3" value="Self-service">
                            <label for="sign3">Self-service</label><br>
                        </li>
                    </ol>
                </td>
            </tr>
            <tr style="text-align:center" colspan="2">
                <td>

                </td>
                <td style="text-align:left">
                    <input type="submit" value="Login">
                    <input type="submit" value="Reset">
                </td>
            </tr>

        </table>
    </form>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        City of: <input type="text" name="city"><br>
        Employement: <input type="text" name="city"><br>
        Web server:

        <br>
        Please specify <br> your role:
        <ul style="list-style-type: none">
            <li><input type="radio" name="admin" value="Admin">Admin</li>
            <li><input type="radio" name="engineer" value="Engineer">Engineer</li>
            <li><input type="radio" name="manager" value="Manager">Manager</li>
            <li><input type="radio" name="guest" value="Guest">Guest</li>
        </ul>
        <br>
        Please specify <br> your role:
        <ul style="list-style-type: none">
            <li><input type="radio" name="admin" value="Admin">Admin</li>
            <li><input type="radio" name="engineer" value="Engineer">Engineer</li>
            <li><input type="radio" name="manager" value="Manager">Manager</li>
            <li><input type="radio" name="guest" value="Guest">Guest</li>
        </ul>
        <br>
        <input type="submit" value="Login">
        <input type="submit" value="Reset">
    </form>

</body>

</html>
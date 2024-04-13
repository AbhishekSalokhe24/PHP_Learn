
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <form action="Html_php.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="Username" id=""><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <button value="Log in">LOG IN</button>
    </form>
   
</body>
</html>

<?php
    echo"{$_POST["Username"]}";
    echo"{$_POST["password"]}"
?>

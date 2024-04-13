<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="InputSanitization.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Age: </label><br>
        <input type="text" name="age"><br>
        <label>Email: </label>
        <input type="text" name="email"><br>
        <input type="submit" name ="Login" value="Login">
    </form>
</body>
</html>

<?php
    
    if(isset($_POST["Login"])){
        // $username = $_POST["username"];
        // echo "Hello {$username}";

        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}<br>";
        echo "age: {$age}<br>";
        echo "Email: {$email}<br>";


    }

?>
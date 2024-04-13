<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to Fakebook!</h2>
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>


<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($username)){
            echo"Please Enter a Username<br>";
        }
        elseif(empty($password)){
            echo"Please Enter a Password<br>";
        }
        else{
            $hash = password_hash($password,PASSWORD_DEFAULT);
            
            //inserting in users table in busineesdb database 
            $sql = "INSERT INTO users (username,passwords) VALUES ('$username','$hash')";
            //inserting in sql table
            mysqli_query($connection,$sql);
            echo"<h1>you are registered</h1>";    
        }
    }
     mysqli_close($connection);
?>
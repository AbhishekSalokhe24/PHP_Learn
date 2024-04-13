<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Inbuilt_Func.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php

    $username = "hello";

    // isset() function

    // if(isset($username)){
    //     echo"The Variable is set";
    // }
    // else{
    //     echo"Vairable is not set";
    // }

    // empty() function

    // if(empty($username)){
    //     echo"The Variable is Empty";
    // }
    // else{
    //     echo"Vairable is not Empty";
    // }

   

    if($_POST["login"]){
        
       $username = $_POST["username"];
       $password = $_POST["password"];

       if(empty($username) && empty($password)){
        echo"Please Enter Username and Password";
       }
       else{
            foreach($_POST as $key => $value){
                echo"{$key} => {$value} <br>";
            }
       }

    }

?>

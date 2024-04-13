<?php

    $password = "Gemes1212";

    $hash = password_hash($password,PASSWORD_DEFAULT);

    if(password_verify($password,$hash)){
        echo"You Logged In";
    }
    else{
        echo"Password Incorrect";
    }
?>
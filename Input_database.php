<?php
    include("database.php");

    $sql = "INSERT INTO users (username,passwords) VALUES ('Spoongebob','GGOG112')";

    mysqli_query($connection,$sql);

    mysqli_close($connection);

    echo"Hello I am Inserting some data.....";
?>





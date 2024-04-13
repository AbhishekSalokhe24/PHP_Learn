<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox in PHP</title>
</head>
<body>
    <form action="CheckBox.php" method="post">
        <input type="checkbox" name="Pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="Hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="Sandwich" value="Sandwich">Sandwic<br>
        <input type="checkbox" name="Cola" value="Cola">Cola<br>
        <input type="submit"  name="submit">
        
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){

        if(isset($_POST["Pizza"])){
            echo"You selected Pizza <br>";
        }
        if(isset($_POST["Hamburge"])){
            echo"You selected Hamburge <br>";
        }
        if(isset($_POST["Sandwich"])){
            echo"You selected Sandwich <br>";
        }
        if(isset($_POST["Cola"])){
            echo"You selected Cola <br>";
        }
    }
    else{
        echo"Please Select or leave the page";
    }

?>
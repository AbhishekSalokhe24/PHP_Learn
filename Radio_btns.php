<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Btn with php</title>
</head>
<body>
    <form action="Radio_btns.php" method="post">

        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Rupay">Rupay<br>
        <input type="radio" name="credit_card" value="Master card">Master card<br>
        <input type="radio" name="credit_card" value="AM express">AM express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php


if($_POST["confirm"]){
    

    if(isset($_POST["credit_card"])){
        
        $card = $_POST["credit_card"];
        echo"You Selected ${card}";

    }
    else{
        echo"Select Card First";
    }
    
}

?>
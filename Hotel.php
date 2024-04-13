<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    <h3>Hotel One</h3>
    <form action="Hotel.php" method="post">
        <label>Enter Quantity:</label><br>
        <input type="text" name="quantity">
    </form>
</body>
</html>

<?php

    $item = "Pizza";
    $price  = 10;

    $quantity = $_POST["quantity"];
    $total_bill = $quantity * $price;

    echo"You Ordered {$quantity} X ${item} <br>";
    echo"total Bill:: ${total_bill}";

?>

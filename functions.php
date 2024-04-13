<?php

    function displayInfo($id,$age,$name,$sal){
        echo"ID: ${id}<br>";
        echo"Age: ${age}<br>";
        echo"name: ${name}<br>";
        echo"salary: ${sal}<br>";
    };

    function Square($num){
        $ans = $num ** 2;
        echo"Square of ${num} : ${ans}<br>";
    };

    displayInfo(1,45,"Harry Sam",1010.1);
    Square(8);
?>
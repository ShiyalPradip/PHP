<?php
    $No1 = $_POST['Num1'];
    $No2 = $_POST['Num2'];
    $Ope = $_POST['Temp'];

    switch($Ope){
        case "+" : echo("Addition Is:- ".$No1 + $No2); break;
        case "-" : echo("Subtraction Is:- ".$No1 - $No2); break;
        case "*" : echo("Multiplication Is:- ".$No1 * $No2); break;
        case "/" : echo("Divition Is:- ".$No1 / $No2); break;
        case "%" : echo("Modulus Is:- ".$No1 % $No2); break;
    }
    
?>
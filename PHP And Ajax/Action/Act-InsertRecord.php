<?php
    require("../Connection/Connection.php");

    $PHPFirstName = $_POST["Key_FirstName"];
    $PHPLastName = $_POST["Key_LastName"];

    $Query = "insert into phpandajax(FirstName, LastName)values('$PHPFirstName', '$PHPLastName')";
    $Trigger = $Connect->query($Query);

    if($Trigger){
        echo 1;
    }else{
        echo 0;
    }
?>
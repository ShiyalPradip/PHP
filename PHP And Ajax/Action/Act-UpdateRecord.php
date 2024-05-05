<?php
    require("../Connection/Connection.php");

    $PHPId          = $_POST["Key_Id"];
    $PHPFirstName   = $_POST["Key_FirstName"];
    $PHPLastName    = $_POST["Key_LastName"];

    $Query = "update phpandajax set FirstName='$PHPFirstName', LastName='$PHPLastName' where Id=$PHPId";
    $Trigger = $Connect->query($Query);

    if($Trigger){
        echo 1;
    }else{
        echo 0;
    }
?>
<?php
    require("../Connection/Connection.php");
    
    $PHPId = $_POST["Key_Id"];

    $Query = "delete from phpandajax where Id=$PHPId";
    $Trigger = $Connect->query($Query);

    if($Trigger){
        echo 1;
    }else{
        echo 0;
    }
?>
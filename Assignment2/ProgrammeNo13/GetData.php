<?php
    include("../../Connect/Connection.php");
    
    session_start();

    $Array = array();

    $Select = "select * from employee";
    $Trigger = $Connect->query($Select);
    $Count = mysqli_num_rows($Trigger);

    foreach($Trigger as $Data){
        $Array[] = $Data;
    }

    $_SESSION['AllData'] = $Array;
    $_SESSION['Index'] = 0;
    $_SESSION['Main'] = 1;
    $_SESSION['Rows'] = $Count-1;

    header("location:ShowData.php");
?>
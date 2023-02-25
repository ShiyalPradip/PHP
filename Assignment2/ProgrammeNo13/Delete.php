<?php
    session_start();

    include("../../Connect/Connection.php");

    $Delete = "delete from employee where Id=$_SESSION[Delete]";
    $Trigger = $Connect->query($Delete);
    
    if($Trigger){
        echo("
            <script>
                alert('The Record Has Been Deleted');
                window.location.href='GetData.php'
            </script>
        ");
    }
?>
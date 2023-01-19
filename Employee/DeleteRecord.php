<?php
    include("Connect.php");

    $DeleteId = $_REQUEST['Id'];

    $Delete = "delete from emloyee1 where Id=$DeleteId";
    $Trigger = $Connect->query($Delete);

    if(!$Trigger){
        echo("
            <script>
                alert('The Record Has Not Been Deleted');
            </script>
        ");
    }else{
        echo("
            <script>
                // alert('The Record Has Been Deleted');
                window.location.href='ShowData.php';
            </script>
        ");
    }
?>
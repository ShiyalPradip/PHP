<?php
    include('Connect.php');

    $DeleteRollNo = $_REQUEST['TempRollNo'];

    $Delete = "delete from databaseoperations where RollNo=$DeleteRollNo";

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
                window.location.href='ShowData.php';
            </script>
        ");
    }
?>
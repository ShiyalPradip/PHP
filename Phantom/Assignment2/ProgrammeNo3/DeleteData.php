<?php
    include('../../Connect/Connection.php');

    $DeleteId = $_REQUEST['Id'];

    $Delete = "delete from stud_tbl_1 where Stud_Id=$DeleteId";
    $Trigger = $Connect->query($Delete);

    if(!$Trigger){
        echo("
            <script>
                alert('The Record Has Not Been Deleted');
            </script>
        ");
    }else{
        header("location:ShowData.php");
    }
?>
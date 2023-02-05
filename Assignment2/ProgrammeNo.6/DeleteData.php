<?php
    include("../Connect/Connection.php");

    $TempBookId = $_REQUEST['Id'];

    $Delete = "delete from bookmaster where BookId=$TempBookId";
    
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
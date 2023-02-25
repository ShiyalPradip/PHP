<?php
    include("../../Connect/Connection.php");

    session_start();

    $DeleteId = $_SESSION['Delete'];

    unlink($_SESSION['Profile']);

    $Delete = "delete from login_logout where Id=$DeleteId";
    $Trigger = $Connect->query($Delete);

    if($Trigger){
        
        session_destroy();

        echo("
            <script>
                alert('Your Account Has Been Deleted Permanently');
                window.location.href='index.php';
            </script>
        ");
    }
?>
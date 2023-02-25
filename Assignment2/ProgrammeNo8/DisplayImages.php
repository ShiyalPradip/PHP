<?php
    echo("<link rel='stylesheet' href='../CSS/bootstrap.min.css'>");

    session_start();

    echo("
        <center>
            <img src='$_SESSION[File]' height='100%' width='100%'/>
        </center>
    ");
?>
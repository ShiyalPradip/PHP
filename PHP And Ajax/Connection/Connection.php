<?php
    $Connect = new mysqli("localhost", "root", "", "test");

    if(!$Connect){
        echo("<script> alert('Faield To Connect With Database...'); </script>");
    
    }else{
        // echo("<script> alert('Successfully Connected With Database...'); </script>");
    }
?>
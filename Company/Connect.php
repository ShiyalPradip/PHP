<?php
    $Connect = new mysqli("localhost","root","","database");

    if(!$Connect){
        echo("
            <script>
                alert('Database Was Not Connected');
            </script>
        ");
    }else{
        // echo("Database connected");
    }
?>
<?php
    $Connect = new mysqli("localhost","root","","database");

    if(!$Connect){
        echo("
            <script>
                alert('Database Is Not Connected');
            </script>
        ");
    }
?>
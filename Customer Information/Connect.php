<?php
    $Connect = new mysqli("localhost","root","","database");

    if($Connect){
        // echo("Data Base Is Connected");
    }else{
        echo("
            <script>
                alert('Database Not Connected');
            </script>
        ");
    }
?>
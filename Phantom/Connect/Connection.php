<?php
    $Connect = new mysqli("localhost","root","","pro_programmer");

    if(!$Connect){
        echo("
            <script>
                alert('Database Not Connected');
            </script>
        ");
    }else{
        // echo("
        //     <script>
        //         alert('Database Connected');
        //     </script>
        // ");
    }
?>
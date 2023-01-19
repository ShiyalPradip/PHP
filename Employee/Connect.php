<?php
    $Connect = new mysqli("localhost","root","","database");

    if(!$Connect){
        echo("
            <script>
                alert('Failed To Connect To Database');
            </script>
        ");
    }else{
        // echo("
        //     <script>
        //         alert('The Database Is Successfully Connected');
        //     </script>
        // ");
    }
?> 
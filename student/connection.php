<?php 

$conn=new mysqli("localhost","root","","college");
if(!$conn)
    echo $conn->error;

?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css" />
    </head>
</html>
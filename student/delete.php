<?php 
    include("connection.php");
?>

<?php 

    $r=$_REQUEST['x'];
    $delete="delete from student where roll=$r";
    $result=$conn->query($delete);

    if($result)
    {
        echo "<script>window.location.href='show.php';</script>";
    }
    else
        echo $conn->error;

?>
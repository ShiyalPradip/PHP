<?php 
    include("connection.php");
    $r=$_REQUEST['x'];

    $select="select * from student where roll=$r";
    $result=$conn->query($select);

    foreach($result as $row)
    {
        $roll=$row['roll'];
        $name=$row['name'];
        $email=$row['email'];
    }
?>

<div class="container mt-4 w-50 bg-dark text-white">
    <form method="POST">
        <h1 class="border-bottom">
            Update Records
        </h1>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"><input type="text" value="<?php echo $name; ?>" class="form-control" name="name"></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email</div>
            <div class="col-9"><input type="Email" value="<?php echo $email; ?>" class="form-control" name="email"></div>
        </div>
        <div class="row text-center p-1">
            <div class="col-12"><button class="bg-warning text-white btn m-1" type="submit" name="Update" >Update</button><a href="show.php" class="btn bg-danger text-white">Show</a></div> 
        </div>
    </form>
</div>

<?php 

if(isset($_POST['Update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $update="update student set name='$name',email='$email' where roll=$roll";
    $result=$conn->query($update);

    if($result)
    {
        echo "<script>window.location.href='show.php';</script>";
    }
    else
        echo $conn->error;
}

?>
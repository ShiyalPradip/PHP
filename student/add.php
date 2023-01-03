<?php 

    include("connection.php");
?>
<div class="container mt-4 w-50 bg-dark text-white">
    <form method="POST">
        <h1 class="border-bottom">
            Add Records
        </h1>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"><input type="text" Placeholder="Enter your Name" class="form-control" name="name"></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email</div>
            <div class="col-9"><input type="Email" Placeholder="Enter your Email" class="form-control" name="email"></div>
        </div>
        <div class="row text-center p-1">
            <div class="col-12"><button class="bg-warning text-white btn m-1" type="submit" name="Add" >Add</button><a href="show.php" class="btn bg-danger text-white">Show</a></div> 
        </div>
    </form>
</div>
<?php 

if(isset($_POST['Add']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $insert="insert into student(name,email)values('$name','$email')";
    $result=$conn->query($insert);

    if($result)
    {
        echo "<script>alert('Inserted...');</script>";
        echo "<script>window.location.href='show.php';</script>";
    }
    else
        echo $conn->error;
}

?>
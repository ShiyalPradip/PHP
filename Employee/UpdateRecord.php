<?php
    include('Connect.php');

    $UpdateId = $_REQUEST['Id'];

    $Select = "select * from emloyee1 where Id=$UpdateId";
    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('No Data Came From The Database');
            </script>
        ");
    }else{
        foreach($Trigger as $Data){
            $Name     = $Data['Name'];
            $Salary   = $Data['Salary'];
            $Email    = $Data['Email'];
            $Password = $Data['Password'];
            $MobileNo = $Data['MobileNo'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/ButtonHover.css">
        <title>Update Record</title>
    </head>
        <body style="background-image: url('Images/BgImage.png'); background-size:cover;">
           <div class="container w-50 Form Margin">
                <form action="" method="post">
                    <div class="row">
                        <div class="col text-center Heading"> Update Record</div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="text" name="Name" id="" class="form-control TextBox" placeholder="<?php echo("Name : ".$Name); ?>"/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="number" name="Salary" id="" class="form-control TextBox" placeholder="<?php echo("Salary : ".$Salary); ?>"/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="email" name="Email" id="" class="form-control TextBox" placeholder="<?php echo("Email : ".$Email); ?>"/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="password" name="Password" id="" class="form-control TextBox" placeholder="<?php echo("Password : ".$Password); ?>"/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="number" name="MobileNo" id="" class="form-control TextBox" placeholder="<?php echo("Mobile No : ".$MobileNo); ?>"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Update" name="Button" class="Add Buttons"/>
                            <a href="ShowData.php" target="blank" class="btn bg-primary text-white Buttons">Show</a>
                            <input type="reset" value="Clear" name="Clear" class="Clear Buttons"/>
                        </div>
                    </div>
                </form>
           </div>
        </body>

        <?php
            if(isset($_POST['Button'])){
              
                $Name     = $_POST['Name'];
                $Salary   = $_POST['Salary'];
                $Email    = $_POST['Email'];
                $Password = $_POST['Password'];
                $MobileNo = $_POST['MobileNo'];

                $Update = "update emloyee1 set Name='$Name', Salary='$Salary', Email='$Email', Password='$Password', MobileNo='$MobileNo' where Id='$UpdateId'";
                $Trigger = $Connect->query($Update);
                
                if(!$Trigger){
                    echo("
                        <script>
                            alert('The Record Was Not Updated Into The Database');
                        </script>
                    ");                 
                }else{
                    echo("
                        <script>
                            alert('The Record Has Been Updated Into The Database');
                            window.location.href='ShowData.php';
                        </script>
                    ");
                }
            }
        ?> 
</html>
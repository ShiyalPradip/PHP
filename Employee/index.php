<?php
    include('Connect.php');
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/ButtonHover.css">
        <title>Employee Information</title>
    </head>
        <body style="background-image: url('Images/BgImage.png'); background-size:cover;">
           <div class="container w-50 Form Margin">
                <form action="" method="post">
                    <div class="row">
                        <div class="col text-center Heading"> Emloyee Information</div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="text" name="Name" id="" class="form-control TextBox" placeholder="Name" required/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="number" name="Salary" id="" class="form-control TextBox" placeholder="Salary" required/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="email" name="Email" id="" class="form-control TextBox" placeholder="Email" required/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="password" name="Password" id="" class="form-control TextBox" placeholder="Password" required/>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <input type="number" name="MobileNo" id="" class="form-control TextBox" placeholder="Mobile No" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Add" name="Button" class="Add Buttons"/>
                            <a href="ShowData.php" target="blank" class="btn Show">Show</a>
                            <input type="reset" value="Clear" name="Clear" class="Clear Buttons"/>
                            <a href="Employee.zip" class="btn Buttons Download" Download>Download</a>
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
        
                $Insert = "insert into emloyee1(Name,Salary,Email,Password,MobileNo)values('$Name','$Salary','$Email','$Password','$MobileNo')";
                $Trigger = $Connect->query($Insert);
        
                if(!$Trigger){
                    echo("
                        <script>
                            alert('The Record Was Not Inserted Into The Database');
                        </script>
                    ");                 
                }else{
                    echo("
                        <script>
                            alert('The Record Has Been Inserted Into The Database');
                            window.location.href='TempPage.php';
                        </script>
                    ");
                }
            }
        ?> 
</html>
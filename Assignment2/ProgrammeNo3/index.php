<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        
        <title>Programme No.3</title>
    </head>
    <body  style="background-image: url('../../Images/Bg.png'); background-size: cover;">
        <div class="container w-50 bg-dark text-white ForDiv">
            <form action="" method="post">
                <div class="row text-center p-3">
                    <div class="col h3"> Student Registration </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Name </div>
                    <div class="col-md-8">
                        <input type="text" name="Stud_Name" placeholder="Enter Your Name Here" class="form-control" id="TextBox" onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || (event.charCode==32)" required>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Email </div>
                    <div class="col-md-8">
                        <input type="email" name="Stud_Email" placeholder="Enter Your Email Here" id="TextBox" class="form-control" required>
                    </div>
                </div>

                <div class="row p-2 ForFont">
                    <div class="col-md-4"> DOB </div>
                    <div class="col-md-8">
                        <input type="date" name="Stud_DOB" placeholder="Enter Your Date Of Birth Here" id="TextBox" class="form-control" required>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Gender </div>
                    <div class="col-md-8 Radio">
                        <input type="radio" name="Stud_Gender" value="Male"   id="Male"   class="form-check-input" required checked> Male
                        <input type="radio" name="Stud_Gender" value="Female" id="Female" class="form-check-input"> Female
                        <input type="radio" name="Stud_Gender" value="Other"  id="Other"  class="form-check-input"> Other
                    </div>
                </div>

                <div class="row p-2 ForFont">
                    <div class="col-md-4"> Total Marks </div>
                    <div class="col-md-8">
                        <input type="text" name="Stud_Tol_Marks" placeholder="Enter Total Marks Here" id="TextBox" class="form-control" required onkeypress="return(event.charCode>=48 && event.charCode<=57)" minlength="0" maxlength="3"/>
                    </div>
                </div>

                <div class="row p-md-4 text-center">
                    <div class="col-md-4">
                        <a href="ShowData.php" class="btn" id="Button"> Show </a>
                    </div>    

                    <div class="col-md-4">
                        <input type="submit" value="Submit" id="Button" name="Button" class="Button">
                    </div>

                    <div class="col-md-4">
                        <input type="reset" id="Button" value="Clear" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </body>
    
    <?php
        include('../../Connect/Connection.php');

        if(isset($_POST['Button'])){         

            $Stud_Name      = $_POST['Stud_Name'];
            $Stud_Email     = $_POST['Stud_Email'];
            $Stud_DOB       = $_POST['Stud_DOB'];
            $Stud_Gender    = $_POST['Stud_Gender'];
            $Stud_Tol_Marks = $_POST['Stud_Tol_Marks'];

            $Insert = "insert into stud_tbl_1(Stud_Name,Stud_Email,Stud_DOB,Stud_Gender,Stud_Tol_Marks) values('$Stud_Name','$Stud_Email','$Stud_DOB','$Stud_Gender','$Stud_Tol_Marks')";

            $Trigger = $Connect->query($Insert);
            
            if($Trigger){
                echo("
                    <script>
                        alert('The Record Has Been Inserted');
                        window.location.href='TempPage.php';
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Record Not Inserted');
                    </script>
                ");
            }
        }
    ?>
</html> 
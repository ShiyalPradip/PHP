<?php
    include("../../Connect/Connection.php");

    $UpdateId = $_REQUEST['Id'];

    $Select = "select * from stud_tbl_1 where Stud_Id=$UpdateId";
    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('No Data Came From The Database');
            </script>
        ");
    }else{
        foreach($Trigger as $Data){
            $Stud_Name      = $Data['Stud_Name'];
            $Stud_Email     = $Data['Stud_Email'];
            $Stud_DOB       = $Data['Stud_DOB'];
            $Stud_Gender    = $Data['Stud_Gender'];
            $Stud_Tol_Marks = $Data['Stud_Tol_Marks'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <link rel="stylesheet" href="CSS/Style.css">

        <title>Update Record</title>
    </head>
    <body Id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post">
                <div class="row p-3">
                    <div class="col Heading"> <h3>Student Registration</h3></div>
                </div>
                <div class="row p-2">
                    <div class="col-4 ForFont"> Name </div>
                    <div class="col-8">
                        <input type="text" name="Stud_Name" placeholder="<?php echo $Stud_Name;?>" id="TextBox" class="form-control" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || (event.charCode==32)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Email </div>
                    <div class="col-8">
                        <input type="email" name="Stud_Email" placeholder="<?php echo $Stud_Email;?>" id="TextBox" class="form-control" required>
                    </div>
                </div>

                <div class="row p-2 ForFont">
                    <div class="col-4"> DOB </div>
                    <div class="col-8">
                        <input type="date" name="Stud_DOB" placeholder="<?php echo $Stud_DOB;?>" id="TextBox" class="form-control" required>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Gender </div>
                    <div class="col-8 Radio">
                        <input type="radio" name="Stud_Gender" value="Male"   id="Male"   class="form-check-input" required> Male
                        <input type="radio" name="Stud_Gender" value="Female" id="Female" class="form-check-input"> Female
                        <input type="radio" name="Stud_Gender" value="Other"  id="Other"  class="form-check-input"> Other
                    </div>
                </div>

                <div class="row p-2 ForFont">
                    <div class="col-4"> Total Marks </div>
                    <div class="col-8">
                        <input type="text" name="Stud_Tol_Marks" placeholder="<?php echo $Stud_Tol_Marks;?>" id="TextBox" class="form-control" required onkeypress="return(event.charCode>=48 && event.charCode<=57)" minlength="0" maxlength="3"/>
                    </div>
                </div>

                <div class="row p-4 text-center">
                    <div class="col-4">
                        <a href="ShowData.php" id="Button" class="btn" target="blank"> Show Data </a>
                    </div>    

                    <div class="col-4">
                        <input type="submit" value="Update" id="Button" name="Button" class="btn">
                    </div>

                    <div class="col-4">
                        <input type="reset" id="Button" value="Clear" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </body>
    
    <?php
        if(isset($_POST['Button'])){         

            $Stud_Name      = $_POST['Stud_Name'];
            $Stud_Email     = $_POST['Stud_Email'];
            $Stud_DOB       = $_POST['Stud_DOB'];
            $Stud_Gender    = $_POST['Stud_Gender'];
            $Stud_Tol_Marks = $_POST['Stud_Tol_Marks'];
       
            $Update = "update stud_tbl_1 set Stud_Name='$Stud_Name',Stud_Email='$Stud_Email',Stud_DOB='$Stud_DOB',Stud_Gender='$Stud_Gender',Stud_Tol_Marks='$Stud_Tol_Marks' where Stud_Id=$UpdateId";
            $Trigger = $Connect->query($Update);
         
            if($Trigger){
                echo("
                    <script>
                        alert('The Record Has Been Updated');
                        window.location.href='ShowData.php';
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Record Not Updated');
                    </script>
                ");
            }
        }
    ?>
</html> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Programme No.13</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post">
                <div class="row text-center p-4">
                    <div class="col h3 text-white">Employee Salary Slip</div>
                </div>
                
                <div class="row p-2">
                    <div class="col-4 text-center ForFont">Name</div>
                    <div class="col-8">
                        <input type="text" name="Name" placeholder="Enter Employee Name Here" class="form-control TextBox" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 text-center ForFont">Email</div>
                    <div class="col-8">
                        <input type="email" name="Email" placeholder="Enter Employee Email Here" class="form-control TextBox" required>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 text-center ForFont">Mobile No</div>
                    <div class="col-8">
                        <input type="tel" name="MobileNo" placeholder="Enter Employee Mobile No Here" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)" minlength="10" maxlength="10">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 text-center ForFont">Basic Salary</div>
                    <div class="col-8">
                        <input type="number" name="BasicSalary" placeholder="Enter Employee Basic Salary Here" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-4">
                        <a href="ShowData.php" class="btn Button"> Show Data </a>
                    </div>

                    <div class="col-4">
                        <input type="submit" value="Submit" name="Button" class="btn Button">
                    </div>

                    <div class="col-4">
                        <input type="reset" value="Clear Form" class="btn Button"/>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        include("../Connect/Connection.php");

        if(isset($_POST['Button'])){
            
            $Name        = $_POST['Name'];
            $Email       = $_POST['Email'];
            $MobileNo    = $_POST['MobileNo'];
            $BasicSalary = $_POST['BasicSalary'];

            $Ta  = ($BasicSalary * 10)   / 100;
            $Da  = ($BasicSalary * 12)   / 100;
            $Hra = ($BasicSalary * 15)   / 100;
            $Pf  = ($BasicSalary * 12.5) / 100;

            $Gross_Salary = $BasicSalary + $Ta + $Da + $Hra;

            $Net_Salary	= $Gross_Salary - $Pf;

            $Insert = "insert into employee(Name,Email,Gross_Salary,Net_Salary,Mobile_No,Basic_Salary,Ta,Da,Hra,Pf) values('$Name ','$Email','$Gross_Salary','$Net_Salary','$MobileNo','$BasicSalary','$Ta','$Da ','$Hra','$Pf')";

            $Trigger = $Connect->query($Insert);

            if(!$Trigger){
                echo("
                    <script>
                        alert('Data Not Inserted');
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Data Has Been Inserted');
                        window.location.href='TempPage.php';
                    </script>
                ");
            }
        }
    ?>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <title>Customer Information</title>
    </head>
        <body background='Images/BgImage.png'>
            <div class="container w-50 FrmBorder">
                <form action="" method="post">
                    <h1 class="text-center"> Customer Information </h1>
        
                    <div class="row p-1">
                        <div class="col-3 TxtAlign"> Name :</div>
                        <div class="col"> <input type="text" name="FirstName"  id=""  class="form-control TxtRadious"  placeholder="Surname" required/> </div>
                        <div class="col"> <input type="text" name="MiddleName" id=""  class="form-control TxtRadious"  placeholder="Yourname"  required/> </div>
                        <div class="col"> <input type="text" name="LastName"   id=""  class="form-control TxtRadious" placeholder="Father's Name" required/> </div>
                    </div>
        
                    <div class="row p-1">
                        <div class="col-3 TxtAlign"> E-Mail :</div>
                        <div class="col-9"> <input type="email" name="EMail" id="" class="form-control TxtRadious" placeholder="Enter Your Email Address" required/> </div>
                    </div>
        
                    <div class="row p-1">
                        <div class="col-3 TxtAlign"> Contact :</div>
                        <div class="col-9"> <input type="number" name="ConNo" id="" class="form-control TxtRadious" placeholder="Enter Your Contact Number" required/> </div>
                    </div>
        
                    <div class="row p-1">
                        <div class="col-3 TxtAlign"> Gender :</div>
                        <div class="col-9"> 
                            <input type="radio" name="Gender" value="Male"   id="" class="form-check-input" required/> Male
                            <input type="radio" name="Gender" value="Female" id="" class="form-check-input"  required/> Female
                            <input type="radio" name="Gender" value="Other"  id="" class="form-check-input"/> Other
                        </div>
                    </div>
        
                    <div class="row p-1">
                        <div class="col-3 TxtAlign"> Pincode :</div>
                        <div class="col-9"> <input type="number" name="PinCode" id="" class="form-control TxtRadious" placeholder="Enter Your Pincode Number" required/> </div>
                    </div>
        
                    <div class="row p-1">
                        <div class="col-3 TxtAlign"> Country :</div>
                        <div class="col-9">
                            <select name="Country" id="" required>
                                <option value=""> Select Your Country </option>
                                <option value="India"> India </option>
                                <option value="Canada"> Canada </option>
                                <option value="Colombia"> Colombia</option>
                                <option value="Denmark"> Denmark</option>
                                <option value="Egypt"> Egypt</option>
                            </select>
                        </div>         
                    </div>
        
                    <div class="row p-4">
                        <div class="col-4 text-center"> <input type="submit" value="Submit" name="Button"/></div>
                        <div class="col-4 text-center"> <a href="ShowData.php" target="blank" class="btn bg-primary text-white"> Show Record </a> </div>
                        <div class="col-4 text-center"> <input type="reset" value="Clear"   name="Button"/></div>
                    </div>
                </form>
            </div>
        </body>

        <?php
            include('Connect.php');
            
            if(isset($_POST['Button'])){
                $Temp  = $_POST['FirstName'];
                $Temp1 = $_POST['MiddleName'];
                $Temp2 = $_POST['LastName'];

                $Name = $Temp." ".$Temp1." ".$Temp2;

                $Email   = $_POST['EMail'];
                $Contact = $_POST['ConNo'];
                $Gender  = $_POST['Gender'];
                $PinCode = $_POST['PinCode'];
                $Country = $_POST['Country'];

                $Insert = "insert into customer_information(Name,EMail,ConNo,Gender,PinCode,Country)values('$Name','$Email','$Contact','$Gender','$PinCode','$Country')";

                $Trigger = $Connect->query($Insert);
                echo("
                    <script>
                        alert('The Record Has Been Saved In The Database');

                        window.location.href='Temp.php';
                    </script>
                ");
            }     
        ?>
</html>
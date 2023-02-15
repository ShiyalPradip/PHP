<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/ProgrammeNo7.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <title>Programme No.14</title>
    </head>
    <body id="BgImage">
        <div class="container bg-dark w-50 text-white ForDiv">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col text-center h3 p-2"> Student Registration </div>
                </div> 

                <div class="row p-2">
                    <div class="col-4 ForFont"> Chose Photo </div>
                    <div class="col-8"> 
                        <input type="file" name="Profile" id="" class="form-control TextBox">
                    </div>
                    
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Name </div>
                    <div class="col-8">
                        <input type="text" name="Name" id="" class='form-control TextBox' placeholder="Enter Your Name Here" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || (event.charCode==32)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Gender </div>
                    <div class="col-8">
                        <input type="radio" name="Gender" id="" value="Male"   class='form-check-input' checked> Male
                        <input type="radio" name="Gender" id="" value="Female" class='form-check-input'> Female
                        <input type="radio" name="Gender" id="" value="Other"  class='form-check-input'> Other
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Hobbies</div>
                    <div class="col-8">
                        <input type="checkbox" name="Hobbies[]" id="" value="Blogging"  class="form-check-input"> Blogging
                        <input type="checkbox" name="Hobbies[]" id="" value="Gardening" class="form-check-input"> Gardening
                        <input type="checkbox" name="Hobbies[]" id="" value="Hacking"   class="form-check-input" checked> Hacking 
                        <input type="checkbox" name="Hobbies[]" id="" value="Camping"   class="form-check-input"> Camping
                    </div>
                </div>

                <div class="row p-2 ForFont">
                    <div class="col-4"> Address </div>
                    <div class="col-8">
                        <textarea name="Address" id="" cols="" rows="2" class='form-control TextBox' required> </textarea>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Country </div>
                    <div class="col-8"> 
                        <select name="Country" id="" class="form-select TextBox">
                            <option value="Bangladesh"> Bangladesh  </option>
                            <option value="India" selected>      India       </option>
                            <option value="Brazil">     Brazil      </option>
                            <option value="Canada">     Canada      </option>
                            <option value="Colombia">   Colombia    </option>
                            <option value="Egypt">      Egypt       </option>
                            <option value="	France"> 	France      </option>
                            <option value="Hong Kong">  Hong Kong   </option>
                        </select>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Pincode </div>
                    <div class="col-8">
                        <input type="text" name="Pincode" id="" class="form-control TextBox" placeholder="Enter Your Pincode Here" required onkeypress="return(event.charCode>=48 && event.charCode<=57)" mainlength="6" maxlength="6">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Mobile No </div>
                    <div class="col-8">
                        <input type="text" name="MobileNo" id="" class="form-control TextBox" placeholder="Enter Your Mobile Number Here" required onkeypress="return(event.charCode>=48 && event.charCode<=57)" minlength="10" maxlength="10">
                    </div> 
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont"> Email </div>
                    <div class="col-8">
                        <input type="email" name="Email" id="" class='form-control TextBox' placeholder="Enter Your Email Here" required>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4">
                        <input type="submit" value="Submit" name="Button" class="btn Button">
                    </div>

                    <div class="col-4">
                        <a href="SearchRecord.php" class="btn Button"> Search Record </a>
                    </div>

                    <div class="col-4">
                        <a href="ShowData.php" class="btn Button"> Show Records </a>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        include("../../Connect/Connection.php");

        if(isset($_POST['Button'])){

            $Name     = $_POST['Name'];
            $Gender   = $_POST['Gender'];
            $Temp     = $_POST['Hobbies'];
            $Hobbies  = implode(",",$Temp);
            $Address  = $_POST['Address'];
            $Country  = $_POST['Country'];
            $Pincode  = $_POST['Pincode'];
            $MobileNo = $_POST['MobileNo'];
            $Email    = $_POST['Email'];

            session_start();

            $_SESSION['Profile'] = "UserData/".$_FILES['Profile']['name'];

            $File = $_FILES['Profile']['tmp_name'];
            $Dest = $_FILES['Profile']['name'];

            move_uploaded_file($File,"UserData/".$Dest);

            $Insert = "insert into student_reg(Name,Gender,Hobbies,Address,Country,Pincode,Mobile,Email) values('$Name','$Gender','$Hobbies','$Address','$Country ','$Pincode','$MobileNo','$Email')";

            $Trigger = $Connect->query($Insert);

            if(!$Trigger){
                echo("
                    <script>
                        alert('Rocord Not Inserted');
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Record Has Been Inserted');
                        window.location.href='TempPage.php';
                    </script>
                ");
            }
        }
    ?>
</html>
<?php
    include('Connect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <title>Company</title>
    </head>
    <body style="background-image:url('Image/image2.jpg'); background-size: cover; background-repeat:no-repeat;">
        <div class="container Background">
            <form action="" method="post">
                <div class="row p-2">
                    <div class="col Align"> Employee Information </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 Font Align2"> Name :</div>
                    <div class="col-3"> <input type="text" name="SurName" id="" class="form-control Border" placeholder="Surname"/> </div>
                    <div class="col-3"> <input type="text" name="Name" id="" class="form-control Border" placeholder="Your Name"/> </div>
                    <div class="col-3"> <input type="text" name="FatherName" id="" class="form-control Border" placeholder="Father's Name"/> </div>

                </div>

                <div class="row p-2 Font">
                    <div class="col-3 Align2"> Gender :</div>
                    <div class="col-9">
                        <input type="radio" name="Gender" id="" value="Male" class="form-check-input "/> Male
                        <input type="radio" name="Gender" id="" value="Female" class="form-check-input"/> Female
                        <input type="radio" name="Gender" id="" value="Other" class="form-check-input"/> Other
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 Font Align2"> DOB :</div>
                    <div class="col-9">
                        <input type="date" name="DOB" id="" class="Border">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 Font Align2"> Country :</div>
                    <div class="col-9">
                        <select name="Country" id="" class="Border">
                            <option value="India" selected> India</option>
                            <option value="Mexico">Mexico</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Canada">Canada</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Russia">Russia</option>
                            <option value="Egypt">Egypt</option>
                        </select>
                    </div>
                </div>

                <div class="row p-2 Font">
                    <div class="col-3 Align2"> Hobbies :</div>
                    <div class="col-9">
                        <input type="checkbox" name="Hobbies[]" id="" value="Dance"> Dance &nbsp;&nbsp;
                        <input type="checkbox" name="Hobbies[]" id="" value="Cooking"> Cooking &nbsp;  &nbsp;
                        <input type="checkbox" name="Hobbies[]" id="" value="Learning"> Learning  &nbsp; &nbsp;
                        <input type="checkbox" name="Hobbies[]" id="" value="Photography"> Photography &nbsp;&nbsp;
                        <input type="checkbox" name="Hobbies[]" id="" value="Shopping"> Shopping &nbsp;&nbsp;                       
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-6 text-center">
                        <input type="submit" value="Add" name="Button" class="btn bg-primary Button"/>
                    </div>
                    <div class="col-6">
                        <a href="Show.php" target="blank" class="btn bg-primary Button"> Show </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['Button'])){
            $SurName = $_POST['SurName'];
            $Name = $_POST['Name'];
            $FatherName = $_POST['FatherName'];

            $FullName = $SurName." ".$Name." ".$FatherName;

            $Gender = $_POST['Gender'];
            $DOB = $_POST['DOB'];
            $Country = $_POST['Country'];

            $TempHobbies = $_POST['Hobbies'];

            $Hobbies = implode(",",$TempHobbies);

            $Insert = "insert into emloyee(FullName,Gender,DOB,Country,Hobbies) values('$FullName','$Gender','$DOB','$Country','$Hobbies')";

            $Trigger = $Connect->query($Insert);

            echo("
                <script>
                    alert('Record Was Inserted');

                    window.location.href='Temp.php';
                </script>
            ");
        }
    ?>
</html>
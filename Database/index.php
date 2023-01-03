<?php
    include('Connect.php');
?>

<html>
    <head>
        <title> Database Operations </title>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
    </head>
    <body style="background-image: url(Images/BGImage.jpg); background-size: cover;">
        <div class="container w-50 Form">
            <form action="" method="post">
                <div class="row text-center ">
                    <div class="col Heading"> Database Operations </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 Font"> Name :</div>
                    <div class="col-8"> 
                        <input type="text" name="Name" id="" class="form-control TxtBox" placeholder="Enter Your Name Here" required/>
                    </div>
                </div>

                 <div class="row p-2">
                    <div class="col-4 Font"> Email :</div>
                    <div class="col-8"> 
                        <input type="email" name="Email" id="" class="form-control TxtBox" placeholder="Enter Your Email Here" required/>
                    </div>
                </div>

                <div class="row text-center p-3">
                    <div class="col-4"> 
                        <input type="submit" value="Add Record" name="Button" class="Add">
                    </div>
                    <div class="col-4"> 
                        <a href="ShowData.php" target="_blank" class="btn Show"> Show Records </a>
                    </div>
                    <div class="col-4"> 
                        <input type="reset" value="Clear" class="Add"/>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        if(isset($_POST['Button'])){
            
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];

            $Insert = "insert into databaseoperations(Name,Email) values('$Name','$Email')";

            $Trigger = $Connect->query($Insert);

            if(!$Trigger){
                echo("
                    <script>
                        alert('Record Not Inserted');
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('The Record Has Been Successfully Inserted');

                        window.location.href='TempPage.php';
                    </script>
                ");
            }
        }
    ?>
</html>
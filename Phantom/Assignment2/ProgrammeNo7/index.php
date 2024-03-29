<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <link rel="stylesheet" href="../CSS/ProgrammeNo7.css">
        <title>Programme No.7</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="#" method="post">
                <div class="row text-center p-3 ">
                    <div class="col h3 text-white"> User LogIn </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 UName"> Username</div>
                    <div class="col-8">
                        <input type="text" name="Username" id="" class="form-control TextBox" placeholder="Enter Your Username Here" required  onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 UName"> Password </div>
                    <div class="col-8">
                        <input type="password" name="Password" id="" class="form-control TextBox" placeholder="Enter Your Password Here" required minlength="8" maxlength="18">
                    </div>
                </div>

                <div class="row p-3 text-center">
                    <div class="col-6">
                        <input type="submit" value="LogIn" name="LogIn" class="btn Button">
                    </div>

                    <div class="col-6">
                        <a href="SignUp.php" class="btn Button"> SignUp </a>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-6">
                        <a href="#" class='Forgot-pass'>Forgot Password ?</a>
                    </div>
                    <div class="col-6">
                        <a href="Admin.php" class='Forgot-pass'>Are You An Admin ?</a>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        include("../../Connect/Connection.php");

        session_start();

        if(isset($_POST['LogIn'])){

            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $LogInDate = date("d/m/y");

            $_SESSION['LogInDate'] = $LogInDate;

            $Update ="update login_logout set LoginDate='$LogInDate' where Username='$Username' and Password='$Password'";
            $Select ="select * from login_logout where Username='$Username' and Password='$Password'";
            
            $Trigger = $Connect->query($Update);
            $Trigger = $Connect->query($Select);

            $CountRow = mysqli_num_rows($Trigger);

            if($CountRow>0){

                $_SESSION['Username'] = $Username;

                header("location:Welcome.php");
            }else{
                echo("
                   <script>
                        alert('Incorrect Username Or Password');
                        window.location.href='index.php';
                   </script>
                ");
            }
        }
    ?>
</html>
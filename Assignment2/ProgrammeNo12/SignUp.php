<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>SignUp</title>
    </head>
    <body Id="BgImage">
        <form action="" method="post">
            <div class="container bg-dark w-50 ForDiv">
                <div class="row p-3 text-center">
                    <div class="col h3 text-white"> SignUp </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Username </div>
                    <div class="col-md-8">
                        <input type="text" name="Username" id="" class="form-control TextBox" placeholder="Enter Your Username Here" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Password </div>
                    <div class="col-md-8">
                        <input type="password" name="Password" id="" class="form-control TextBox" placeholder="Enter Your Password Here" required minlength="8" maxlength="18">
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col text-center">
                        <input type="submit" value="SignUp" name="Button" class="btn Button">
                    </div>
                </div>
            </div>
        </form>
    </body>

    <?php
        include("../../Connect/Connection.php");

        if(isset($_POST['Button'])){

            $Username = $_POST['Username'];
            $Password = $_POST['Password'];

            $Insert = "insert into login_signup(Username,Password)values('$Username','$Password')";

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
                        alert('Record Has Been Inserted');
                        window.location.href='index.php';
                    </script>
                ");
            }
        }
    ?>
</html>
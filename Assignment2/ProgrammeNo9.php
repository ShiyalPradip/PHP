<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css"/>
        <link rel="stylesheet" href="CSS/Style.css"/>
        <title>Programme No.9</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post">
                <div class="row p-3 text-center">
                    <div class="col h3 text-white"> Reverse a Number </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Enter a Number </div>
                    <div class="col-md-8">
                        <input type="number" name="Number" placeholder="Enter a Number Here" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)"/>
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col text-center">
                        <input type="submit" value="Reverse It" name="Button" class="btn Button"/>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        if(isset($_POST['Button'])){

            $Number = $_POST['Number'];
            $Reverse = strrev($Number);

            echo("
                <div class='container w-50 bg-dark ForDiv'>
                    <form>
                        <div class='row p-2'>
                            <div class='col-md-4 ForFont'> Original Number </div>
                            <div class='col-md-8'>
                                <input type='text' value='$Number' class='form-control TextBox' readonly/>
                            </div>
                        </div>
                        <div class='row p-2'>
                            <div class='col-md-4 ForFont'> Reverse </div>
                            <div class='col-md-8'>
                                <input type='text' value='$Reverse' class='form-control TextBox' readonly/>
                            </div>
                        </div>
                    </form>
                </div>
            ");
        }
    ?>
</html>
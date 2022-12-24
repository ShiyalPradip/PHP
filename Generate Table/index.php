<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="Style.css">
        <title>Generate Table</title>
    </head>
        <body>
            <div class="container FrmWidth">
                <form action="" method="post">
                    <h2 class="text-center pt-3 pb-3"> Generate Table </h2>

                    <div class="row p-1">
                        <div class="col-6 FrmFont"> Enter a Number :</div>
                        <div class="col-6"> <input type="number" name="Digit" id="" class="form-control FrmTextBox" placeholder="Enter a Number" required/> </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-12 p-4"> <input type="submit" value="Create a Table" name="Submit" class="FrmButton"/> </div>
                    </div>
                </form>
            </div>

            <?php
                if(isset($_POST['Submit'])) {
                    $Num = $_POST['Digit'];
                    
                    echo("<div class='Ans w-25 container'>");
                        for ($i=1; $i <= 10; $i++) { 

                            $Ans = $Num * $i;
                            echo("$Num X $i  = $Ans <br/>");
                        }
                    echo("</div>");
                }
            ?>
        </body>
</html>
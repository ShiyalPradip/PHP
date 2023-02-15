<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../CSS/bootstrap.min.css">
            <link rel="stylesheet" href="CSS/Style.css">
            <title>Multiplication Table</title>
        </head>
            <body Class="Bg-Table">
                <div class="container text-white w-50 Div">
                    <form action="" method="post">
                        <div class="row text-center p-3">
                            <div class="col h3 Head-Table"> Multiplication Table </div>
                        </div>

                        <div class="row p-2">
                            <div class="col-4 text-center h4 Head-Table"> Enter a Number : </div>
                            <div class="col-8">
                                <input type="number" name="Num" placeholder="Enter a Number Here" class="form-control TxtBox-Table" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                            </div>
                        </div>

                        <div class="row p-3 text-center">
                            <div class="col">
                                <input type="submit" value="Show Table" name="Table" class="btn Btn-Table">
                            </div>
                        </div>
                    </form>
                </div>
            </body>

            <?php
                if(isset($_POST['Table'])){
                    
                    $Num = $_POST['Num'];

                    echo("<center> <div class='MulDiv text-center w-25 Div Lbl Head-Table h5'>");
                        for($i=1; $i<=10; $i++) echo($Num." X ".$i." = ".$Num*$i."<br/>");
                    echo("</div></center>");
                }
            ?>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <title>Factorial</title>
    </head>
    <body class="Bg-Facto">
        <div class="container text-white w-50 Div">
            <form action="" method="post">
                <div class="row text-center p-3">
                    <div class="col h2 Head-Table"> Factorial </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 text-center Head-Calcu h5"> Enter a Number : </div>
                    <div class="col-8">
                        <input type="number" name="Num" placeholder="Enter a Number Here" class="form-control TxtBox-Calcu" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-2 text-center">
                    <div class="col">
                        <input type="submit" value="Show" name="Show" class="btn Btn-Table">
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['Show'])){
            $Num = $_POST['Num'];
            $Fact = 1;

            for($i=1; $i<=$Num; $i++){

                $Fact = $Fact * $i;
            }

            echo("
                <script>
                    alert('Factotial Of ".$Num." Is ".$Fact."');
                </script>
            ");
        }
    ?>
</html>
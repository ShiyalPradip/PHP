<?php
    if(isset($_POST['Add']) || isset($_POST['Sub']) || isset($_POST['Mul']) || isset($_POST['Div']) || isset($_POST['Mod'])){
                
        $Num1 = $_POST['Num1'];
        $Num2 = $_POST['Num2'];
    }
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../CSS/bootstrap.min.css">
            <link rel="stylesheet" href="CSS/Style.css">
            <title>Calculator</title>
        </head>
        <body class="Bg-Calcu">
            <div class="container text-white w-50 Div">
                <form action="" method="post">
                    <div class="row text-center p-3">
                        <div class="col h3 Head-Calcu"> Calculator </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-4 text-center Head-Calcu h5"> Enter a Number : </div>
                        <div class="col-8">
                            <input type="number" name="Num1" value="<?php echo @$Num1; ?>" placeholder="Enter a First Number Here" class="form-control TxtBox-Calcu" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-4 text-center Head-Calcu h5"> Enter a Number : </div>
                        <div class="col-8">
                            <input type="number" name="Num2" value="<?php echo @$Num2; ?>"  placeholder="Enter a Second Number Here" class="form-control TxtBox-Calcu" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                        </div>
                    </div>

                    <div class="row text-center p-3">
                        <div class="col">
                            <input type="submit" value="+" name="Add" class="btn Btn-Calcu">
                            <input type="submit" value="-" name="Sub" class="btn Btn-Calcu Calcu-Button-Margin">
                            <input type="submit" value="x" name="Mul" class="btn Btn-Calcu Calcu-Button-Margin">
                            <input type="submit" value="/" name="Div" class="btn Btn-Calcu Calcu-Button-Margin">
                            <input type="submit" value="%" name="Mod" class="btn Btn-Calcu Calcu-Button-Margin">
                        </div>
                    </div>
                </form>
            </div>
        </body>

        <?php
            if(isset($_POST['Add']) || isset($_POST['Sub']) || isset($_POST['Mul']) || isset($_POST['Div']) || isset($_POST['Mod'])){
                
                $Num1 = $_POST['Num1'];
                $Num2 = $_POST['Num2'];
                
                if(isset($_POST['Add'])){ echo(" <script> alert('Addition Of Two Numbers Is : ".$Num1+$Num2."'); </script> ");
                
                }elseif(isset($_POST['Sub'])){ echo(" <script> alert('Subtraction Of Two Numbers Is : ".$Num1-$Num2."'); </script> ");

                }elseif(isset($_POST['Mul'])){ echo(" <script> alert('Multiplication Of Two Numbers Is : ".$Num1*$Num2."'); </script> ");

                }elseif(isset($_POST['Div'])){ echo(" <script> alert('Division Of Two Numbers Is : ".$Num1/$Num2."'); </script> ");

                }elseif(isset($_POST['Mod'])){ echo(" <script> alert('Subtraction Of Two Numbers Is : ".$Num1%$Num2."'); </script> ");

                }
            }
        ?>
</html>
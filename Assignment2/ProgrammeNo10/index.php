<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/style.css">
        <title>Programme No.10</title>
        <script src="../JavaScript/For_CheckBox.js"> </script>
    </head>
    <body id="BgImage">
        <div class="container bg-dark w-50 text-white ForDiv">
            <form action="" method="post">
                <div class="row p-3">
                    <div class="col h3 text-center">Calculation</div>
                </div>

                <div class="row p-2">
                    <div class="col-6">
                        <input type="number" name="Num1" id="No1" class="form-control TextBox" placeholder="Enter The First Number Here" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>

                    <div class="col-6">
                        <input type="number" name="Num2" id="No2" class="form-control TextBox" placeholder="Enter The Secound Number Here" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-3">
                    <div class="col-4"> <input type="radio" name="Calcu" id="Add"  onclick="CheckNow()"  class="form-check-input"> <b> Addition </b>       </div>
                    <div class="col-4"> <input type="radio" name="Calcu" id="Sub"  onclick="CheckNow()" class="form-check-input"><b> Subtraction     </b> </div>
                    <div class="col-4"> <input type="radio" name="Calcu" id="Mul"  onclick="CheckNow()"  class="form-check-input"> <b> Multiplication </b> </div>
                </div>
            </form>
        </div>
    </body>    
</html>
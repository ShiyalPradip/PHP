<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Programme No.5</title>
    </head>
    <body id="BgImage">
        <div class="container bg-dark w-50 ForDiv">
            <form action="" method="post">
                <div class="row text-center p-2">
                    <div class="col h3 text-white">Registration</div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Id </div>
                    <div class="col-md-8">
                        <input type="number" name="RegId" id="" placeholder="Enter Your Registration Id Here" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)"/>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Name </div>
                    <div class="col-md-8">
                        <input type="text" name="RegName" id="" placeholder="Enter Your Registration Name Here" class="form-control TextBox" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || event.charCode==32"/>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Email </div>
                    <div class="col-md-8">
                        <input type="email" name="RegEmail" id="" placeholder="Enter Your Registration Email Here" class="form-control TextBox" required/>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4 ForFont"> Contact </div>
                    <div class="col-md-8">
                        <input type="text" name="RegCon" id="" placeholder="Enter Your Registration Contact Here" class="form-control TextBox" required minlength="10" maxlength="10" onkeypress="return(event.charCode>=48 && event.charCode<=57)"/>
                    </div>
                </div>

                <div class="row p-3 text-center">
                    <div class="col">
                        <input type="submit" value="Submit" name="Button" class="btn Button">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
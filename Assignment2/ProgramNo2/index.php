<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <title>Programe No.2</title>
    </head>
    <body style="background-image: url('Images/Bg.png'); background-size: cover;">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post">
                <div class="row p-3">
                    <div class="col-3 ForFont"> Enter a String </div>
                    <div class="col-9">
                        <input type="text" name="String" id="" placeholder="Enter a String Here" class="form-control TextBox" required/>
                    </div>
                </div>
                <div class="row p-3 text-center">
                    <div class="col">
                        <input type="submit" value="Submit" name="Button" class="Button"/>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['Button'])){
            
            $String  =  $_POST['String'];
            $Length  =  strlen($String);
            $Word    =  str_word_count($String);
            $Reverse =  strrev($String);

            echo("
                <div class='container w-50 bg-dark ForDiv ForDiv2'>
                    <div class='row p-3 mt-3'>
                        <div class='col-4 ForFont'> Original String </div>
                        <div class='col-8'> 
                            <input type='text' value='$String' class='form-control TextBox'/>
                        </div>
                    </div>
                    
                    <div class='row p-3'>
                        <div class='col-4 ForFont'> Total Length </div>
                        <div class='col-8'> 
                            <input type='text' value='$Length' class='form-control TextBox'/>
                        </div>
                    </div>
                    
                    <div class='row p-3'>
                        <div class='col-4 ForFont'> Total Word </div>
                        <div class='col-8'> 
                            <input type='text' value='$Word' class='form-control TextBox'/>
                        </div>
                    </div>

                    <div class='row p-3'>
                        <div class='col-4 ForFont'> Reverse </div>
                        <div class='col-8 mb-3'> 
                            <input type='text' value='$Reverse' class='form-control TextBox'/>
                        </div>
                    </div>
                </div>
            ");
        }
    ?>
</html>
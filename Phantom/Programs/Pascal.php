<html>
    <head>
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
        <title> Pascal Triangle</title>
    </head>
    <body class="Bg-Calcu">
        <div class="container w-50 Div">
            <form action="" method="post">
                <div class="row p-3">
                    <div class="col text-center p-3 h2"> Pascal Triangle </div>
                </div>

                <div class="row p-3">
                    <div class="col-4 Head-Table Lbl"> Enter a Number: </div>
                    <div class="col-8"> <input type="number" name="Num" id="" class="form-control TxtBox-Calcu" placeholder="Enter Number Of Rows Here" required/> </div>
                </div>

                <div class="row">
                    <div class="col text-center p-3 "> <input type="submit" value="Show" name="Button" class="btn Btn-Table"> </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['Button'])){
            
            $Num = $_POST['Num'];
            $No=0;

            echo("<center> <div class='Head-Table Lbl'>");
                for($Row=0; $Row<$Num; $Row++){
                    for($Space=0; $Space<($Num-$Row); $Space++){
                        echo(" ");
                    }
    
                    $No=1;
                    for($Col=0; $Col<=$Row; $Col++){
                        echo $No;
    
                        $No = $No*($Row-$Col)/($Col+1);
                    }
    
                    echo("<br/>");
                }   
            echo("</div> </center>");
        }
    ?>
</html>
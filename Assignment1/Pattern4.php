<!-- 
    Programe No.12:
        Wirte a PHP Script To Display Following Pyramid
                  1
                 2 3
                4 5 6
               7 8 9 10
-->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Pyramid Program 4</title>
    </head>
    <body class="Bg_Image">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3 h2 text-white"> Pattern Program 4 </div>
                </div>

                <div class="row p-3">
                    <div class="col-4"> <p> Enter a Number: </p> </div>
                    <div class="col-8"> <input type="number" name="Rows" id="" class="form-control TextBox" placeholder="Enter Number Of Rows Here" required/> </div>
                </div>

                <div class="row">
                    <div class="col text-center p-3 "> <input type="submit" value="Show" name="Button" class="btn bg-dark text-white"> </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        if(isset($_POST['Button'])){
            $Num = $_POST['Rows'];
            $k = 1;

            echo("<h5 align='center' style='color:white; margin-top:50px;'>");
                for ($i=1; $i <=$Num; $i++) { 
                    for ($j=1; $j <= $i ; $j++) { 
                       echo("$k ");
                       $k++;
                    }
                     echo("<br/>");
                }
            echo("</h5>");
        }
    ?>
</html>
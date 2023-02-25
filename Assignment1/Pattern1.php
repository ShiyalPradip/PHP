<!-- 
    Programe No.9:
        Wirte a PHP Script To Display Following Pyramid
            *
            **
            ***
            ****
            ***** 
-->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Pyramid Program 1</title>
    </head>
    <body class="Bg_Image">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3 h2 text-white">  Pattern Program 1 </div>
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
            
            echo("<div class='Pattern'>");
                    for ($i=0; $i < $Num; $i++) { 
                        for ($j=0; $j <= $i ; $j++) { 
                            echo("* ");
                        }
                        echo("<br/>");
                    }
            echo("</div>");
        }
    ?>
</html>
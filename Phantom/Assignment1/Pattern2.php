<!-- 
    Programe No.10:
        Wirte a PHP Script To Display Following Pyramid
            0
            10
            101
            0101
            01010
-->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Pyramid Program 2</title>
    </head>
    <body style="background-image:url('Images/BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Pattern Program 2 </h2> </div>
                </div>

                <div class="row p-3">
                    <div class="col-4"> <p> Enter a Number: </p> </div>
                    <div class="col-8"> <input type="number" name="Rows" id="" class="form-control TextBox" placeholder="Enter Number Of Rows Here" required/> </div>
                </div>

                <div class="row">
                    <div class="col text-center p-3 "> <input type="submit" value="Show" name="Button" class="btn bg-primary"> </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        if(isset($_POST['Button'])){
            $Num = $_POST['Rows'];
            $k = 1;

            echo("<div class='Pattern'>");
                for ($i=1; $i <=$Num; $i++) { 
                    for ($j=1; $j <= $i ; $j++) { 
                        if($k % 2 == 1){  
                            echo("0 ");    
                        }else{
                            echo("1 ");
                        }
                        $k++;
                    }
                    echo("<br/>");
                }
            echo("</div>");
        }
    ?>
</html>
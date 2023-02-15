<!-- 
    Programe No.1:
        Wirte a PHP Script To Display Following Pyramid
               A
              BAB
             CBABC
            DCBABCD
           EDCBABCDE

    o-> Which Function Used:-
        The ord() Function Is a Inbuilt Function In PHP That Returns The ASCII Value Of The First Character Of a String. 
        This Function Takes a Character String As a Parameter And Returns The ASCII Value Of The First Character Of This String.
-->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Pyramid Program 3</title>
    </head>
    <body style="background-image:url('Images/BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Pattern Program 3 </h2> </div>
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
                
            echo("<div class='text-center' style='color:white;'>");
                for ($i=1; $i <=$Num; $i++) { 
                    for ($j=1; $j <= $Num-1 ; $j++) { 
                        
                    }
                    
                    for ($j=$i; $j >0; $j--) { 
                        echo chr($j+64);
                     }

                     for ($j=2; $j<=$i; $j++) { 
                        echo chr($j+64);
                     }
                     echo("<br/>");
                }
            echo("</div>");
        }
    ?>
</html>
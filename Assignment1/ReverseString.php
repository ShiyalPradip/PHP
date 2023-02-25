<!-- 
    Programe No.5:
        Write a PHP Script To Display String In Reverse Order.

    o-> Example:-
        Input:-  Shiyal Pradip
        Output:-  
 -->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Reverse a String </title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body class="Bg_Image">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3 h2 text-white"> Reverse a String </div>
                </div>

                <div class="row p-3">
                    <div class="col-4"> <p> Enter a String: </p> </div>
                    <div class="col-8"> <input type="text" name="String" id="" class="form-control TextBox" placeholder="Enter a String Here" required/> </div>
                </div>

                <div class="row">
                    <div class="col text-center p-3 "> <input type="submit" value="Reverse It" name="Button" class="btn bg-dark text-white"> </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['Button'])){
            $String = $_POST['String'];

            echo("<h3 align='center'> Reverse String Is ".strrev($String)."</h3>");
        }
    ?>
</html>
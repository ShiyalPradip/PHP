<!-- 
    Programe No.1:
        Write a PHP Script To Input Number And Check Whether The Number Is Armstrong Or Not

    o-> How To Calculate Armstrong Number?

        407 = (4 * 4 * 4) + (0 * 0 * 0) + (7 * 7 * 7)
            = 64 + 0 + 343
            = 407
 -->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Armstrong Number </title>
    </head>
    <body style="background-image:url('Images/BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Armstrong Number </h2> </div>
                </div>

                <div class="row p-3">
                    <div class="col-4"> <p> Enter a Number: </p> </div>
                    <div class="col-8"> <input type="number" name="Num1" id="" class="form-control TextBox" placeholder="Enter a Number Here" required/> </div>
                </div>

                <div class="row">
                    <div class="col text-center p-3 "> <input type="submit" value="Calculate" name="Button" class="btn bg-primary"> </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        if(isset($_POST['Button'])){
            $Num = $_POST['Num1'];
            $Total = 0;
            $i=$Num;

            while($i!=0){ 
                
                $Rem = $i % 10;
                $Total = $Total + ($Rem * $Rem *  $Rem);
                $i=$i/10;
            }

            if($Num == $Total){
                echo("
                    <script>
                        alert('Yes $Num Is An Armstrong Number');
                    </script>
                ");  
            }else{
                echo("
                    <script>
                        alert('No $Num Is Not An Armstrong Number');
                    </script>
                ");  
            }
        }
    ?>
</html>
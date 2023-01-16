<!-- 
    Programe No.8:
        Write a PHP Script To Find Sum Of The Given Digit.

    o-> How To Find Sum Of The Given Digit?

       14597 = 1 + 4 + 5 + 9 + 7  
             = 26  
 -->
 <?php
    include('Common.php');
?>

<html>
    <head>
        <title> Sum Of The Given Digit </title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body style="background-image:url('BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Sum Of The Given Digit </h2> </div>
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
            $Sum = 0;
            $Rem = 0;

            for ($i=0; $i <= strlen($Num) ; $i++) { 
                $Rem = $Num % 10;
                $Sum = $Sum + $Rem;
                $Num = $Num / 10; 
            }

            echo("
                <script>
                    alert('Sum Of The Given Digit Is -> $Sum');
                </script>
            ");
        }
    ?>
</html>
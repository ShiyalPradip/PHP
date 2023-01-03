<!-- 
    Programe No.6:
        Write a PHP Script To Check Number Is Odd Or Even

    o-> What Is Odd - Even Numbers?
        Even numbers are those which are divisible by 2. Numbers like 2,4,6,8,10, etc are even.
        Odd numbers are those which are not divisible by 2. Numbers Like 1, 3, 5, 7, 9, 11, etc are odd.
 -->
<?php
    include('Common.php');
?>


 <html>
    <head>
        <title> Odd/Even Number</title>
    </head>
    <body style="background-image:url('BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Odd/Even Number </h2> </div>
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

            if($Num % 2 == 0){
                echo("
                    <script>
                        alert('$Num Is An Even Number');
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('$Num Is An Odd Number');
                    </script>
                ");
            }
        }
    ?>
</html>
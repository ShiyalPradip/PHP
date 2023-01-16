<!-- 
    Program No.2:
        Write a Php Script To Input Number And Check Whether The Number Is Palindrome Or Not

    o-> What Is Palindrome Number?
            A Number Is Said To Be a Palindrome If It Remains Same Even After Reversing The Digits Or Letters Respectively.
    
    o-> Example:-
            Input  : 1441
            Output : Palindrome
 -->
<?php
    include('Common.php');
?>

 <html>
    <head>
        <title> Palindrome Number</title>
    </head>
    <body style="background-image:url('BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Palindrome Number </h2> </div>
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
            $Temp = $Num;
            $Dummy = 0;

            while(floor($Num)) {
                $Rem = $Num % 10;
                $Dummy = ($Dummy * 10) + $Rem;
                $Num = $Num / 10;
            }

            if($Temp == $Dummy){
                echo("
                    <script>
                        alert('Yes, This Is An Palindrome Number');
                    </script>
                ");  
            }else{
                echo("
                    <script>
                        alert('No, This Is Not An Palindrome Number');
                    </script>
            ");  
            }
        }
    ?>
</html>  
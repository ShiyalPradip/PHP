<!-- 
    Programe No.3:
        Write a PHP Script To Input Number And Check Whether The Number Is Prime Or Not

    o-> How To Calculate Prime Number?
        A Simple Solution Is To Iterate Through All Numbers From 2 To N/2 And For Every Number Check If It Divides N.
        If We Find Any Number That Divides, We Return 0 (False) Otherwise We Will Return 1 (True). 
    
    o-> Example:-
        Input : 21
        Output : Not Prime

        Input : 31
        Output : Prime
 -->
<?php
    include('Common.php');
?>

<html>
    <head>
        <title> Prime Number</title>
    </head>
    <body style="background-image:url('BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Prime Number </h2> </div>
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
            
            function CheckNow($Dummy){
                if($Dummy == 1){
                    return 0;
                }

                for ($i=2; $i <= $Dummy / 2; $i++) { 
                    if($Dummy % $i == 0){
                        return 0;
                    }
                }

                return 1;
            }
            
            $Temp = CheckNow($Num);

            if($Temp == 1){
                echo("
                    <script>
                        alert('Yes $Num Is An Prime Number');
                    </script>
                ");  
            }else{
                echo("
                    <script>
                        alert('No $Num Is Not An Prime Number');
                    </script>
                ");  
            }
        }
    ?>
</html>
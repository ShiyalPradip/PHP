<!-- 
    Programe No.4:
        Write a php script to input number and check whether the number is magic or not

    o-> What Is Magic Number?
            A Number Is Said To Be a Magic Number, If The Sum Of Its Digits Are Calculated Till a Single Digit 
        Recursively By Adding The Sum Of The Digits After Every Addition. 
        
        If The Single Digit Comes Out To Be 1,Then The Number Is a Magic Number.
    
    o-> Example:-
        Input:- 50113 
             =5+0+1+1+3=10 
             =1+0
        
        Output:1 
 -->
 <?php
    include('Common.php');
?>

<html>
    <head>
        <title> Magic Number </title>
    </head>
    <body style="background-image:url('BgImage.png'); background-size:cover;">
        <div class="Image container BgColor">
            <form action="" method="post">
                <div class="row">
                    <div class="col text-center p-3"> <h2> Magic Number </h2> </div>
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
            $Dummy = $_POST['Num1'];
            
            function Magic($Dummy){
                $Sum = 0;
            
                // Note That The Loop Continues If N Is 0 And Sum Is Non-Zero.
                // It Stops When N Becomes 0 And Sum Becomes Single Digit.
                while($Dummy > 0 || $Sum > 9){
                  
                    if($Dummy == 0){
                      
                        $Dummy = $Sum;
                        $Sum = 0;
                    }

                    $Sum = $Sum + $Dummy % 10;
                    $Dummy = $Dummy / 10;
                }

                return ($Sum == 1); // Return True If Sum Becomes 1.
            }
            
            if(Magic($Dummy)){
                echo("
                    <script>
                        alert('Yes $Dummy Is An Magic Number');
                    </script>
                ");  
            }else{
                echo("
                    <script>
                        alert('No $Dummy Is Not An Magic Number');
                    </script>
                ");  
            }
        }
    ?>
</html>
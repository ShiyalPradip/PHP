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

<html>
    <head>
        <title> Number Is Magic Number Or Not</title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Magic Number </th>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td class="Text"> Enter a Number :</td>
                    <td>
                        <input type="number" name="Num1" id="" required/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Calculate" name="Button">
                    </td>
                    <!-- <td></td> -->
                </tr>
            </table>
        </form>
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
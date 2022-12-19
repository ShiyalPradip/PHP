<!-- 
    Program No.2:
        Write a Php Script To Input Number And Check Whether The Number Is Palindrome Or Not

    o-> What Is Palindrome Number?
            A Number Is Said To Be a Palindrome If It Remains Same Even After Reversing The Digits Or Letters Respectively.
    
    o-> Example:-
            Input  : 1441
            Output : Palindrome
 -->

 <html>
    <head>
        <title> Number Is Palindrome Or Not</title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Palindrome Number </th>
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
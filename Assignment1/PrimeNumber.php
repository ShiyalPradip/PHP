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

<html>
    <head>
        <title> Number Is Prime Or Not</title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Prime Number </th>
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
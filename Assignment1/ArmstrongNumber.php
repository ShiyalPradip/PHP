<!-- 
    Programe No.1:
        Write a PHP Script To Input Number And Check Whether The Number Is Armstrong Or Not

    o-> How To Calculate Armstrong Number?

        407 = (4 * 4 * 4) + (0 * 0 * 0) + (7 * 7 * 7)
            = 64 + 0 + 343
            = 407
 -->

<html>
    <head>
        <title> Number Is Armstrong Or Not</title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Armstrong Number </th>
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
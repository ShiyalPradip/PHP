<!-- Write a PHP Script To Perform Additon & Subtraction Operation Between Any Two Numbers -->
<html>
    <head>
        <title> Addition & Subtraction </title>
    </head>
    <body>
        <form action="" method="post">
            <table border="5px" bordercolor="blue" width="23%" height="30%" cellpadding="13px" cellspacing="3px">
                <tr>
                    <th colspan="2"> Sum & Sub </th>
                </tr>

                <tr>
                    <td align="right"> Num1: </td>
                    <td> <input type="number" name="Num1" id="" required/> </td>
                </tr>

                <tr>
                    <td align="right"> Num2: </td>
                    <td> <input type="number" name="Num2" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td> <input type="submit" value="Sum" Name="Add"/> </td>
                    <td> <input type="submit" value="Sub" Name="Sub"/> </td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['Add']) || isset($_POST['Sub'])){
                $Temp1 = $_POST['Num1'];
                $Temp2 = $_POST['Num2'];
                $Temp3;

                if(isset($_POST['Add'])){
                    
                    $Temp3 = $Temp1 + $Temp2;

                    echo("Addtion Of ".$Temp1." And ".$Temp2." Is ".$Temp3);
                
                }else if(isset($_POST['Sub'])){
       
                    $Temp3 = $Temp1 - $Temp2;

                    echo("Subtraction  Of ".$Temp1." And ".$Temp2." Is ".$Temp3);
       
                }
            }
        ?>
    </body>
</html>
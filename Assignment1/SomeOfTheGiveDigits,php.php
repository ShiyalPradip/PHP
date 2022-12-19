<!-- 
    Programe No.8:
        Write a PHP Script To Find Sum Of The Given Digit.

    o-> How To Find Sum Of The Given Digit?

       14597 = 1 + 4 + 5 + 9 + 7  
             = 26  
 -->

<html>
    <head>
        <title> Sum Of The Given Digit </title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Sum Of The Given Digit </th>
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
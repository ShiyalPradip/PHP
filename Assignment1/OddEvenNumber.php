<!-- 
    Programe No.6:
        Write a PHP Script To Check Number Is Odd Or Even

    o-> What Is Odd - Even Numbers?
        Even numbers are those which are divisible by 2. Numbers like 2,4,6,8,10, etc are even.
        Odd numbers are those which are not divisible by 2. Numbers Like 1, 3, 5, 7, 9, 11, etc are odd.
 -->
 <html>
    <head>
        <title> Number Is Odd Or Even</title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Number Is Odd Or Even </th>
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
                        <input type="submit" value="Check" name="Button">
                    </td>
                    <!-- <td></td> -->
                </tr>
            </table>
        </form>
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
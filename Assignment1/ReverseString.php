<!-- 
    Programe No.5:
        Write a PHP Script To Display String In Reverse Order.

    o-> Example:-
        Input:-  Shiyal Pradip
        Output:-  
 -->

<html>
    <head>
        <title> Reverse a String </title>
        <link rel="stylesheet" href="For_Table.css">
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Reverse a String </th>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td class="Text"> Enter a String :</td>
                    <td>
                        <input type="text" name="String" id="" required/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Reverse It" name="Button">
                    </td>
                    <!-- <td></td> -->
                </tr>
            </table>
        </form>
    </body>

    <?php
        if(isset($_POST['Button'])){
            $String = $_POST['String'];

            echo("<h2 align='center'> Reverse String Is ".strrev($String)."</h2>");
        }
    ?>
</html>
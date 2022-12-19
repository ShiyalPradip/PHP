<!-- 
    Programe No.9:
        Wirte a PHP Script To Display Following Pyramid
            *
            **
            ***
            ****
            ***** 
-->

<html>
    <head>
        <title> Pyramid Program 1</title>
        <link rel="stylesheet" href="For_Table.css">
        <style>
            div{
                margin-left: 600px;
                margin-top: 30px;
                color: blue;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Pyramid Program 1</th>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td class="Text"> Enter a Rows:</td>
                    <td>
                        <input type="number" name="Rows" id="" required/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Show Pattern" name="Button">
                    </td>
                    <!-- <td></td> -->
                </tr>
            </table>
        </form>
    </body>

    <?php
        if(isset($_POST['Button'])){
            $Num = $_POST['Rows'];
             echo("<div>");
            for ($i=0; $i < $Num; $i++) { 
                for ($j=0; $j <= $i ; $j++) { 
                    echo("* ");
                }
                echo("<br/>");
            }
            echo("</div>");
        }
    ?>
</html>
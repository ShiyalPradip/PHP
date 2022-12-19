<!-- 
    Programe No.1:
        Wirte a PHP Script To Display Following Pyramid
               A
              BAB
             CBABC
            DCBABCD
           EDCBABCDE

    o-> Which Function Used:-
        The ord() Function Is a Inbuilt Function In PHP That Returns The ASCII Value Of The First Character Of a String. 
        This Function Takes a Character String As a Parameter And Returns The ASCII Value Of The First Character Of This String.
-->

<html>
    <head>
        <title> Pyramid Program 3</title>
        <link rel="stylesheet" href="For_Table.css">
        <style>
            div{
                margin-top: 30px;
                color: blue;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <table border="0px" align="center" class="HeWi" cellspacing="3px" cellpadding="5px">
                <tr>
                    <th colspan="2"> Pyramid Program 3</th>
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
            $k = 1;
                
            echo("<div>");
                for ($i=1; $i <=$Num; $i++) { 
                    for ($j=1; $j <= $Num-1 ; $j++) { 
                        
                    }
                    
                    for ($j=$i; $j >0; $j--) { 
                        echo chr($j+64);
                     }

                     for ($j=2; $j<=$i; $j++) { 
                        echo chr($j+64);
                     }
                     echo("<br/>");
                }
            echo("</div>");
        }
    ?>
</html>
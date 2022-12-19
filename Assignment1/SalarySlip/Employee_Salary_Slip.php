<!-- 
    Write a PHP Script To Find Out Or Generate Employee Slary Slip.

    Script Consist Employee Name And Basic Salary While TA(10%),DA(20%),HRA(30%),PF(12.5%) And Grose Salary Genarated Automatically
Based On Basic Salary And Net Salary.
 -->

 <html>
    <head>
        <title>Employee Salary Slip</title>
        <link rel="stylesheet" href="Employee_Salary_Slip.css">
    </head>
    <body>
        <form action="" method="post">
            <table class="Table1" align="center" cellpadding="10px" cellspacing="5px"> 
                <tr>
                    <th colspan="2" class="Table_Heading">Employee Salary Slip</th>
                </tr>

                <tr>
                    <td class="For_Label"> Employee Name </td>
                    <td> <input type="text" name="Emp_Name" id="" class="Text_Box" required/> </td>
                </tr>

                <tr>
                    <td class="For_Label">Basic Salary </td>
                    <td> <input type="number" name="Emp_Basic_Salary" id="" class="Text_Box" required/> </td>
                </tr>

                <tr align="center">
                    <td> <input type="submit" value="Calculate" name="Button"> </td>
                    <td> <input type="reset" value="Clear" name="Button"> </td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['Button'])){

                $B_Salary = $_POST['Emp_Basic_Salary'];

                $TA  = ($B_Salary * 10)   / 100;
                $DA  = ($B_Salary * 20)   / 100;
                $HRA = ($B_Salary * 30)   / 100;
                $PF  = ($B_Salary * 12.5) / 100;
                
                $G_Salary = $B_Salary + $TA + $DA + $HRA;
                
                $Net_Salary = $G_Salary - $PF;
            
                echo("<hr class='Border'/>");
                echo("<table align='center' class='Table2' cellpadding='5px' cellspacing='5px'>
                        <tr>
                            <th colspan=2 class='Heading'> Salary Slip </th>
                        </tr>
                        <tr>
                            <td class='Align'> TA </td>
                            <td class='Ans'> $TA </td>
                        </tr>

                        <tr>
                            <td class='Align'> DA </td>
                            <td class='Ans'> $DA </td>
                        </tr>

                        <tr>
                            <td class='Align'> HRA </td>
                            <td class='Ans'> $HRA </td>
                        </tr>

                        <tr>
                            <td class='Align'> PF </td>
                            <td class='Ans'> $PF </td>
                        </tr>

                        <tr> 
                            <td class='Align'> Gross Salary </td>
                            <td class='Ans'> $G_Salary </td>
                        </tr>

                        <tr>
                            <td class='Align'> Net Salary </td>
                            <td class='Ans'> $Net_Salary </td>
                        </tr>
                    </table>");
            }
        ?>
    </body>
 </html>
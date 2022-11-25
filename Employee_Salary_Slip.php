<!-- 
    Write a PHP Script To Find Out Or Generate Employee Slary Slip.

    Script Consist Employee Name And Basic Salary While TA(10%),DA(20%),HRA(30%),PF(12.5%) And Grose Salary Genarated Automatically
Based On Basic Salary And Net Salary.
 -->

 <html>
    <head>
        <title>Employee Salary Slip</title>
    </head>
    <body>
        <form action="" method="post">
            <table border="5px" width="30%" height="20%" cellpadding="10px" cellspacing="5px"> 
                <tr>
                    <th colspan="2">Employee Salary Slip</th>
                </tr>

                <tr align="center">
                    <td>Employee Name: </td>
                    <td> <input type="text" name="Emp_Name" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td>Basic Salary: </td>
                    <td> <input type="number" name="Emp_Basic_Salary" id="" required/> </td>
                </tr>

                <tr>
                    <td align="center" colspan="2"> <input type="submit" value="Calculate" name="Button"/> </td>
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
            
                echo("TA:  "."<input type='number' value='$TA' />"."<br/>");
                echo("DA:  "."<input type='number' value='$DA' />"."<br/>");
                echo("HRA: "."<input type='number' value='$HRA' />"."<br/>");
                echo("PF: "."<input type='number' value='$PF' />"."<br/>");
                
                echo("Gross Salary: "."<input type='number' value='$G_Salary' />"."<br/>");
                echo("Net  Salary: "."<input type='number' value='$Net_Salary' />"."<br/>");
            }
        ?>
    </body>
 </html>
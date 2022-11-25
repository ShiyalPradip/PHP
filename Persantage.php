<!-- Write a PHP Script To Find Out Persantage Of The Student Of Any Four Subject -->
<html>
    <head>
        <title> Student Persantage </title>
    </head>
    <body>
        <form action="" method="post">
            <table  border="5px" width="30%" height="35%" cellpadding="20px" cellspacing="5px">
                <tr>
                    <th colspan="2">Student Persantage</th>
                </tr>

                <tr align="center">
                    <td> PHP: </td>
                    <td> <input type="number" name="Sub1" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td> AOS: </td>
                    <td> <input type="number" name="Sub2" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td> .Net: </td>
                    <td> <input type="number" name="Sub3" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td> OOAD: </td>
                    <td> <input type="number" name="Sub4" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td colspan="2"> <input type="submit" value="Submit" name="Button"> </td>
                </tr>
            </table>
        </form>

       <?php
            if(isset($_POST['Button'])){

                $Temp1 = $_POST['Sub1'];
                $Temp2 = $_POST['Sub2'];
                $Temp3 = $_POST['Sub3'];
                $Temp4 = $_POST['Sub4'];
                $Total = $Temp1 + $Temp2 + $Temp3 + $Temp4;
                $Per = $Total / 4;

                echo("Persantage Is: "."<input type='number' value='$Per'/>");
            }
       ?>
        
    </body>
</html>
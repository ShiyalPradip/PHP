<!-- Write a PHP Script To Find Out Whether a Student Is PASS Or FAIL. Using Any Four Subjects -->
<html>
    <head>
        <title>Student Is Pass or Fail</title>
    </head>
    <body>
        <form action="" method="post">
            <table border="5px" width="30%" height="35%" >
                <tr>
                    <th colspan="2">Student Is Pass Or Fail</th>
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
                    <td> OOAD: </td>
                    <td> <input type="number" name="Sub3" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td> .Net: </td>
                    <td> <input type="number" name="Sub4" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td colspan="2"> <input type="submit" value="Submit" name="Button"> </td>
                </tr>
            </table>
        </form>
    </body>

    <?php
        if(isset($_POST['Button'])){
            
            $S1 = $_POST['Sub1'];
            $S2 = $_POST['Sub2'];
            $S3 = $_POST['Sub3'];
            $S4 = $_POST['Sub4'];

            $Temp=NULL;

            if($S1>=28 && $S2>=28 && $S3>=28 && $S4>=28){
                $Temp = "PASS";
            }else{
                $Temp = "FAIL";
            }
        
            echo("Student Is "."<input type='text' value='$Temp'/>");
        }
    ?>
</html>
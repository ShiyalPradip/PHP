<html>
    <head>
        <title> Student Persantage </title>
    </head>
    <body>
        <form method="POST" action="">
            <table border="3px" align="center" width="30%" height="30%">
                <tr>
                    <td align="right"> Subject 1 Marks: </td>
                    <td> <input type="number" name="Sub1"> </td>
                </tr>
                <tr>
                    <td align="right"> Subject 2 Marks: </td>
                    <td> <input type="number" name="Sub2"> </td>
                </tr>
                <tr>
                    <td align="right"> Subject 3 Marks: </td>
                    <td> <input type="number" name="Sub3"> </td>
                </tr>
                <tr>
                    <td align="right"> Subject 4 Marks: </td>
                    <td> <input type="number" name="Sub4"> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" value="Submit" name="Button"> </td>
                    <!-- <td></td> -->
                </tr>
            </table>
        </form>

        <?php               
            if(isset($_POST['Button'])){
                $S1 = $_POST['Sub1'];
                $S2 = $_POST['Sub2'];
                $S3 = $_POST['Sub3'];
                $S4 = $_POST['Sub4'];
        
                 $Sum = $S1 + $S2 + $S3 + $S4;
                 $Per = $Sum / 4;

                echo "Total:"."<input type='number' value='$Sum' />";
                echo "Parcantage :"."<input type='number' value='$Per'/>";
            }
        ?>
    </body>
</html>
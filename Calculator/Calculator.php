<html>
    <head>
        <title> Calculator In PHP </title>
    </head>
        <body>
            <form action="Calcu.php" method="POST">
                <table border="3px" height="31%" width="40%" align="center">
                    <tr>
                        <td colspan="2" align="right"> Enter a Number :</td>
                        <td colspan="4"> <input type="number" name="Num1" required /> </td>
                    </tr>
                        <tr>
                            <td colspan="2" align="right"> Enter a Number: </td> 
                            <td colspan="4"> <input type="number" name="Num2" required /> </td> 
                        </tr>
                        <tr align="center">
                            <td> <input type="submit" value="+" name="Temp"/> </td>
                            <td> <input type="submit" value="-" name="Temp"/> </td>
                            <td> <input type="submit" value="*" name="Temp"/> </td>
                            <td> <input type="submit" value="/" name="Temp"/> </td>
                            <td> <input type="submit" value="%" name="Temp"/> </td>
                            <td> <input type="reset" value="Clear" /> </td>
                        </tr>
                </table>
            </form>
        </body>
</html>
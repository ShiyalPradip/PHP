<html>
    <head>
        <title>Storing Data In To Data Base</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body bgcolor="AntiqueWhite">
        <form method="post">
            <table border="0px" class="WidHei" align="center" cellspacing="4px">
                <tr>
                    <th colspan="2" align="center"> Add Record </th>
                    <!-- <td> </td> -->
                </tr>
                <tr>
                    <td class="Label"> User Name:</td>
                    <td>
                        <input type="text" name="Username" id="" required/>
                    </td>
                </tr>
                <tr>
                    <td class="Label"> Password:</td>
                    <td> 
                        <input type="password" name="Password" id="" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Submit" Name="Button"/>
                    </td>
                    <!-- <td></td> -->
                </tr>
            </table>
        </form>

        <?php
            $Connect = new mysqli("localhost","root","","Kbpccs");

            if(!$Connect){
                echo("Data Base Is Not Connected!!");
            }

            if(isset($_POST['Button'])){

                $UserName = $_POST['Username'];
                $Password = $_POST['Password'];

                $Insert = "insert into student(Username,Password) values('$UserName','$Password')";

                $Result = $Connect-> query($Insert);

                if($Insert){
                    echo("
                        <script> 
                            alert('The Data Has Been Inserted Successfully'); 
                            window.location.href='try.php'; 
                        </script>
                    ");
                }else{
                    echo("<script> alert('Error :- The Data Donen't Inserted'); </script>");
                }
            }   
        ?>
    </body>
</html>
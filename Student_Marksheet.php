<!-- 
    Write a PHp Script To Make a Marksheet Of The Student Which Includes Name Of The Student, Marks Of Any Four Subjects,
Result(Pass/Fail),Total,Persantage.

    NOTE:- 
        Total,Persantage,Result Are Auto Genrated. 
 -->

 <html>
    <head>
        <title>Student Marksheet</title>
    </head>
    <body>
        <form action="" method="post">
            <table  border="5px" width="30%" height="35%">
                <tr align="center">
                    <th colspan="2">Student Marksheet</th>
                </tr>

                <tr align="center">
                    <td>Name :</td>
                    <td> <input type="text" name="S_Name" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td>PHP: </td>
                    <td> <input type="number" name="S_Sub1" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td>AOS: </td>
                    <td> <input type="number" name="S_Sub2" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td>OOAD: </td>
                    <td> <input type="number" name="S_Sub3" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td>.Net: </td>
                    <td> <input type="number" name="S_Sub4" id="" required/> </td>
                </tr>

                <tr align="center">
                    <td> <input type="submit" value="Submit Data" name="Button"> </td>
                    <td> <input type="reset" value="Clear"> </td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['Button'])){
                $T_Name = $_POST['S_Name'];        
                $T_Sub1 = $_POST['S_Sub1'];
                $T_Sub2 = $_POST['S_Sub2'];
                $T_Sub3 = $_POST['S_Sub3'];
                $T_Sub4 = $_POST['S_Sub4'];

                $Total = $T_Sub1 + $T_Sub2 + $T_Sub3 + $T_Sub4;
                $Result = NULL;
                $Grade = NULL;
                $Per = $Total / 4;

                if($T_Sub1>=28 && $T_Sub2>=28 && $T_Sub3>=28 && $T_Sub4){
                    
                   $Result = "PASS";

                    if($Per>=80) $Grade="O";
                    else if($Per>=70) $Grade="A";
                    else if($Per>=60) $Grade="B";
                    else if($Per>=50) $Grade="C";
                    else if($Per>=40) $Grade="D";
                    else $Grade="E";

                    echo("Per    :"."<input type='number' value='$Per'/>"."<br/>");
                
                }else{
                    $Grade="F";
                    $Result="FAIL";
                    $Per="-";
                    
                    echo("Per    :"."<input type='text' value='$Per'/>"."<br/>");
                }
            
                echo("Total  : "."<input type='number' value='$Total'/>"."<br/>");
                echo("Result : "."<input type='text' value='$Result'/>"."<br/>");
                echo("Grade  : "."<input type='text' value='$Grade'/>");
            }
        ?>
    </body>
 </html>
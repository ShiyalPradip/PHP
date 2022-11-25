<!-- Sending Data Or Geting Input From Client Side -->
<html>
    <head>
        <title> Clint To Server </title>
    </head>
    <body>
        <form action="" method="post">
            Enter Number: <input type="number" name="Num" id="" required/>

            <input type="submit" value="Submit" name="Submit"/>
        </form>
        
        <?php
            if(isset($_POST['Submit'])){
                
                $Temp = $_POST['Num'];

                if($Temp % 2 == 0){
                    echo($Temp." Is Even Number");
                }else{
                    echo($Temp." Is Odd Number");
                }
            } 
        ?>
    </body>
</html>
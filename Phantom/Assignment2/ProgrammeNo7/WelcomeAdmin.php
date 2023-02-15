<?php
    include("../../Connect/Connection.php");
    
    echo("<link rel='stylesheet' href='../CSS/bootstrap.min.css'>");
    echo("<link rel='stylesheet' href='../CSS/Style.css'>");
    echo("<link rel='stylesheet' href='../CSS/Admin.css'>");
    echo("<body Id='Hacker'> </body>");

    session_start();

    if($_SESSION['Admin']!=NULL){

        $Select = "select * from login_logout where Role!=1";

        $Trigger = $Connect->query($Select);

        if($Trigger){
            echo("
                <table class='table'>
                    <tr class='Username'>
                        <td> 
                            <img src='../../Images/Hacker.png'/>
                            <b> Welcome Black Hat Hacker ".$_SESSION['Admin']."</b> 
                        </td>

                        <td align='center'> 
                            <form method='post' class='mt-3'> 
                                <input type='submit' value='Log Out' name='LogOut' class='btn Button'> 
                            </form>
                        </td>
                    </tr>
                </table>
            ");

            echo("
                <table class='table For-Table'>
                    <tr class='Table-Heading'>
                        <th> Name </th>
                        <th> Username </th>
                        <th> Password </th>
                        <th> LogIn Date </th>
                        <th> Email </th>
                        <th> Contact </th>
                    <tr>
            ");
            
            foreach($Trigger as $Data){
                echo("
                    <tr class='Username'>
                        <td> $Data[Name]          </td>
                        <td> $Data[Username]      </td>
                        <td> $Data[Password]      </td>
                        <td> $Data[LoginDate]     </td>
                        <td> $Data[Email]         </td>
                        <td> $Data[ContactNumber] </td>
                    </tr>
                ");    
            }

            echo("</table>");
        }
        
    }else{
        echo("
            <script>
                alert('You Must Create An Account To Access This Webpage');
                window.location.href='index.php';
            </script>
        ");
    }
    
    if(isset($_POST['LogOut'])){
        
        session_destroy();
        
        echo("
            <script>
                window.location.href='index.php';
             </script>
        ");
    }
?>
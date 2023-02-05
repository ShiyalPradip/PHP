<?php
    include("../Connect/Connection.php");
   
    echo("<link rel='stylesheet' href='../CSS/bootstrap.min.css'>");
    echo("<link rel='stylesheet' href='../CSS/Style.css'>");
    echo("<link rel='stylesheet' href='../CSS/ProgrammeNo7.css'>");
    echo("<body Id='BgImage'> </body>");

    session_start();

    if($_SESSION['Username']!=NULL){

        $Select = "select * from login_logout where Username='$_SESSION[Username]'";

        $Trigger = $Connect->query($Select);

        if($Trigger){

            foreach($Trigger as $Data){
                $Id            = $Data['Id'];
                $Name          = $Data['Name'];
                $Username      = $Data['Username'];
                $Password      = $Data['Password'];
                $Address       = $Data['Address'];
                $Email         = $Data['Email'];
                $Gender        = $Data['Gender'];
                $ContactNumber = $Data['ContactNumber'];
                $Photo         = $Data['Photo'];
            }

            echo("
                <table class='table'>
                    <tr class='Heading'>
                        <td> 
                            <img src='$Photo' class='Profile'/>
                            <b> Welcome ".$_SESSION['Username']."</b> 
                        </td>
                        <td> <b> LogIn Date : </b> <b class='LogInDate'> ".$_SESSION['LogInDate']." </b></td>
                        <td align='center'> 
                            <form method='post'> 
                                <input type='submit' value='Log Out' name='LogOut' class='btn Button'> 
                            </form>
                        </td>
                    </tr>
                </table>
            ");

            echo("
                <div class='container For-Shadow text-white w-50'>
                    <div class='row p-3 Fields-Data'>
                        <div class='col-6'> User Id :  $Id </div>
                        <div class='col-6'> Your Name : $Name </div>
                    </div>

                    <div class='row p-3'> <div class='col-6 Data'> Username :     </div> <div class='col-6 Fields-Data'> $Name          </div> </div>
                    <div class='row p-3'> <div class='col-6 Data'> Password :     </div> <div class='col-6 Fields-Data'> $Password      </div> </div>
                    <div class='row p-3'> <div class='col-6 Data'> Address :      </div> <div class='col-6 Fields-Data'> $Address       </div> </div>
                    <div class='row p-3'> <div class='col-6 Data'> Email :        </div> <div class='col-6 Fields-Data'> $Email         </div> </div>
                    <div class='row p-3'> <div class='col-6 Data'> Gender :       </div> <div class='col-6 Fields-Data'> $Gender        </div> </div>
                    <div class='row p-3'> <div class='col-6 Data'> Contact :      </div> <div class='col-6 Fields-Data'> $ContactNumber </div> </div>
                </div>
            ");
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
        header("location: index.php");
    
    }
?>
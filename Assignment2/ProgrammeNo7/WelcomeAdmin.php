<?php
    include("../../Connect/Connection.php");
    
    echo("
        <link rel='stylesheet' href='../CSS/bootstrap.min.css'>
        <link rel='stylesheet' href='../CSS/Style.css'>
        <link rel='stylesheet' href='../CSS/Admin.css'>
        <script type='text/javascript' src='JavaScript/Script.js'> </script>
        <body Id='Hacker'> </body>
    ");

    session_start();

    function TableHeading(){
        echo("
            <table class='table For-Table'>
                <tr class='Table-Heading'>
                    <th> Id         </th>
                    <th> Name       </th>
                    <th> Username   </th>
                    <th> Password   </th>
                    <th> LogIn Date </th>
                    <th> Email      </th>
                    <th> Contact    </th>
                    <th colspan='2'> Operations </th>
                <tr>
        ");
    }

    if($_SESSION['Admin']!=NULL){

        $Enable = 0;
        
        echo("
            <form method='post'>
                <table class='table'>
                    <tr class='Username'>
                        <td> 
                            <img src='../../Images/Hacker.png'/>
                            <b>".$_SESSION['Admin']."</b> 
                        </td>
                        
                        <td> <input type='text' name='TxtSearch' class='form-control mt-3 Search' placeholder='Enter Id Number Here'> </td>                
                        <td> 
                            <button type='submit' name='BtnSearch' class='mt-2 btn'> 
                                <img src='../../Images/search.png' height='35px'/>
                            </button>    
                        </td>
                        
                        <td align='right' class=''>
                            <button type='submit' name='Admin'  class='mt-2 btn BtnMargin'> 
                                <img src='../../Images/admin.png' height='35px'/>
                            </button>

                            <button type='submit' name='User'   class='mt-3 btn BtnMargin'>
                                <img src='../../Images/user2.png' height='35px'/>
                            </button>

                            <button type='submit' name='LogOut' class='mt-3 btn'>
                                <img src='../../Images/logout.png' height='35px'/>
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        ");
    }else{
        echo("
            <script>
                alert('Only Admins Can Access This Webpage');
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

    }elseif(isset($_POST['Admin'])){

        $Select = "select * from login_logout where Role=1";
        $Trigger = $Connect->query($Select);

        if($Trigger){

            TableHeading();

            foreach($Trigger as $Data){
                echo("
                    <tr class='Username'>
                        <td> $Data[Id]        </td>
                        <td> $Data[Name]      </td>
                        <td> $Data[Username]  </td>
                        <td> $Data[Password]  </td>
                        <td> $Data[LoginDate] </td>
                        <td> $Data[Email]     </td>
                        <td> $Data[ContactNo] </td>

                        <td align='right'> 
                            <a href='Update.php?Id=$Data[Id]'>  
                                <img src='../../Images/update.png' height='35px'/>
                            </a> 
                        </td>
                        <td> 
                            <a href='Delete.php?Id=$Data[Id]'> 
                                <img src='../../Images/delete.png' height='35px'/>
                            </a> 
                        </td>
                    </tr>
                ");    
            }
            echo("</table>");
        }
        
    }elseif(isset($_POST['User'])){

        $Select = "select * from login_logout where Role!=1";
        $Trigger = $Connect->query($Select);

        if($Trigger){
            
            TableHeading();

            foreach($Trigger as $Data){
                echo("
                    <tr class='Username'>
                        <td> $Data[Id]        </td>
                        <td> $Data[Name]      </td>
                        <td> $Data[Username]  </td>
                        <td> $Data[Password]  </td>
                        <td> $Data[LoginDate] </td>
                        <td> $Data[Email]     </td>
                        <td> $Data[ContactNo] </td>

                        <td align='right'> 
                            <a href='Update.php?Id=$Data[Id]'>  
                                <img src='../../Images/update.png' height='35px'/>
                            </a> 
                        </td>
                        <td> 
                            <a href='Delete.php?Id=$Data[Id]'> 
                                <img src='../../Images/delete.png' height='35px'/>
                            </a> 
                        </td>
                    </tr>
                ");    
            }
            echo("</table>");
        }
    }
?>
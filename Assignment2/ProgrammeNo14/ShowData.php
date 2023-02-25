<?php
    include("../Connect/Connection.php");

    echo("
        <link rel='stylesheet' href='../CSS/bootstrap.min.css'>
        <link rel='stylesheet' href='../CSS/style.css'>
    ");

    session_start();

    $Select = "select * from student_reg";
    
    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('Data Can Not Fetched From The Database');
            </script>
        ");
    }else{
        echo("
            <table class='table table-striped table-bordered'>
                <tr align='center'>
                    <td colspan='9'> <a href='index.php' class='btn Button'> Add New Record </a> </td>
                </tr>
                <tr class='bg-danger text-white'>
                    <th> Id         </th>
                    <th> Name       </th>
                    <th> Gender     </th>
                    <th> Hobbies    </th>
                    <th> Address    </th>
                    <th> Country    </th>
                    <th> Pincode    </th>
                    <th> Mobile No  </th>
                    <th> Email      </th>
                </tr>
        ");

        foreach($Trigger as $Data){
            echo("
                <tr> 
                    <td> $Data[Id]      </td>
                    <td> $Data[Name]    </td>
                    <td> $Data[Gender]  </td>
                    <td> $Data[Hobbies] </td>
                    <td> $Data[Address] </td>
                    <td> $Data[Country] </td>
                    <td> $Data[Pincode] </td>
                    <td> $Data[Mobile]  </td>
                    <td> $Data[Email]   </td>
                </tr>
            ");
        }

        echo("</table>");
    }
?>
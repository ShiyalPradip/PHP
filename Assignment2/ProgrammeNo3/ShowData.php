<?php
    include('../Connect/Connection.php');
    echo("<link rel='stylesheet' href='../CSS/bootstrap.min.css'>");
    echo("<link rel='stylesheet' href='../CSS/Style.css'>");
    echo("<title> Show Records </title>");

    $Select = "select * from stud_tbl_1";
    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('Data Is Not Fetched From The Database');
            </script>
        ");
    }else{
        echo("
            <table class='table table-bordered table-striped' align='center'>
                <tr align='center'>
                    <td colspan='8'> <a href='index.php' class='btn Button'> Add Record </a> </td>
                </tr>
                
                <tr class='bg-danger text-white' align='center'>
                    <th> Id </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> DOB </th>
                    <th> Gender </th>
                    <th> Total Mark </th>
                    <th colspan='2'> Operations </th>
                </tr>
        ");

        foreach($Trigger as $Data){
            echo("
                <tr class='Data'>
                    <td> $Data[Stud_Id]        </td>
                    <td> $Data[Stud_Name]      </td>
                    <td> $Data[Stud_Email]     </td>
                    <td> $Data[Stud_DOB]       </td>
                    <td> $Data[Stud_Gender]    </td>
                    <td> $Data[Stud_Tol_Marks] </td>

                    <td align='center'> <a href='UpdateData.php?Id=$Data[Stud_Id]' class='btn Button'> Update </a>
                    <td align='center'> <a href='DeleteData.php?Id=$Data[Stud_Id]' class='btn Button'> Delete </a>
                </tr>
            ");          
        }

        echo("</table>");
    }
?>
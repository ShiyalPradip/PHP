<?php
    include('Connect.php');

    echo("<link rel='stylesheet' href='CSS/bootstrap.min.css'>");
    echo("<link rel='stylesheet' href='CSS/Style.css'>");
    echo("<title> Displaing Records </title>");

    $Select = "select * from emloyee1";
    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('Data Is Not Fetched From The Database');
            </script>
        ");
    }else{
        echo("
            <table class='table table-striped table-bordered w-75' align='center'>
                <tr align='center'>
                    <td colspan='8'> <a href='index.php' class='btn bg-primary text-white Fonts'> Add New Record </a>
                </tr>
                <tr class='bg-danger text-white'>
                    <th> Id </th>
                    <th> Name </th>
                    <th> Salary </th>
                    <th> Email </th>
                    <th> Password </th>
                    <th> Mobile No </th>
                    <th colspan='2'> Operations </th>
                </tr>
        ");

        foreach($Trigger as $Data){
            echo("
                <tr class='Fonts'>
                    <td> $Data[Id]       </td>
                    <td> $Data[Name]     </td>
                    <td> $Data[Salary]   </td>
                    <td> $Data[Email]    </td>
                    <td> $Data[Password] </td>
                    <td> $Data[MobileNo] </td>

                    <td> <a href='UpdateRecord.php?Id=$Data[Id]' class='btn bg-dark text-white Fonts'> Update </a> </td>
                    <td> <a href='DeleteRecord.php?Id=$Data[Id]' class='btn bg-danger text-white Fonts'> Delete </a> </td>
                </tr>
            ");   
        }

        echo("
            </table>
        ");
    }
?>
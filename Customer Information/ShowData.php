<html>
    <head>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/For_ShowData.css">
    </head>
</html>

<?php
    include('Connect.php');

    $Select = "select * from customer_information";
    $Result = $Connect->query($Select);

    echo("
        <table class='table table-bordered table-striped'>
            <tr class='bg-primary'>
                <th> Name </th>
                <th> E-Mail </th>
                <th> Contact No </th> 
                <th> Gender </th>
                <th> Pin Code </th>
                <th> Country </th>
            </tr>
    ");

    foreach($Result as $Data){
        echo("
            <tr>
                <td> $Data[Name]  </td>
                <td> $Data[EMail] </td>
                <td> $Data[ConNo] </td>
                <td> $Data[Gender] </td>
                <td> $Data[Pincode] </td>
                <td> $Data[Country] </td>
            </tr>
        ");
    }

    echo("</table>");
?>
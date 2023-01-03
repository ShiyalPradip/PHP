<?php
    include('Connect.php');
   
    echo("<title> Your Data </title>");
    echo("<link rel='stylesheet' href='CSS/bootstrap.min.css'>");
    echo("<link rel='stylesheet' href='CSS/Style.css'>");
   
    $Select = "select * from databaseoperations";
    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('Data is not fetched from the database');
            </script>
        ");
    }else{
        echo("
            <div class='container'>
                <table class='table table-striped table-bordered'>
                    <tr class='bg-primary text-white text-center'>
                        <th> Roll No </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th colspan='2'> Operations </td>
                    </tr>
        ");

        foreach($Trigger as $Data){
            echo("
                <tr class='Weight'> 
                    <td> $Data[RollNo] </td>
                    <td> $Data[Name]   </td>
                    <td> $Data[Email]  </td>
                    <td align='center'> <a href='UpdateData.php?TempRollNo=$Data[RollNo]' class='Update'> Update </a> </td>
                    <td align='center'> <a href='DeleteData.php?TempRollNo=$Data[RollNo]' class='Delete'> Delete </a> </td>
                </tr>
            ");
        }

        echo("
                </table>
            </div>
        ");
    }
?>
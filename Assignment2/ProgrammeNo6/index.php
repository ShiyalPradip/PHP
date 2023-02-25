<?php
    include("../../Connect/Connection.php");
    echo("<link rel='stylesheet' href='../CSS/bootstrap.min.css'>");
    echo("<link rel='stylesheet' href='../CSS/Style.css'>");
    echo("<title> Programme No.6 </title>");

    $Select = "select * from bookmaster";

    $Trigger = $Connect->query($Select);

    if(!$Select){
        echo("
            <script>
                alert('Data Not Fetched From Database');
            </script>
        ");
    }else{
        
        echo("
            <table class='table table-bordered table-striped'>
                <tr align='center'>
                    <td colspan='8'> <a href='AddRecord.php' class='btn Button'> Add Record </a> </td>
                </tr>
                <tr class='bg-danger text-white' align='center'>
                    <th> Book Id     </th>
                    <th> Book Name   </th>
                    <th> Author Name </th>
                    <th> Price       </th>
                    <th> Quantity    </th>
                    <th> Net Amount  </th>
                    <th> Delete      </th>
                    <th> Update      </th> 
                </tr>
        ");

        foreach($Trigger as $Data){
            echo("
                <tr class='Data'>   
                    <td align='center'> $Data[BookId]     </td>
                    <td> $Data[BookName]   </td>
                    <td> $Data[AuthorName] </td>
                    <td align='center'> $Data[Price]      </td>
                    <td align='center'> $Data[Quantity]   </td>
                    <td align='center'> $Data[NetAmount]  </td>

                    <td align='center'> <a href='UpdateData.php?Id=$Data[BookId]' class='btn Button'> Update </a> </td>
                    <td align='center'> <a href='DeleteData.php?Id=$Data[BookId]' class='btn Button'> Delete </a> </td>
                </tr>
            ");
        }

        echo("</table>");
    }
?>
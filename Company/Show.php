<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Show</title>
</head>
    <body>
        <?php
            include('Connect.php');

            $Select = "select * from emloyee";
            $Result =  $Connect->query($Select);

            if($Result){
                echo("
                    <div class='container'>
                        <table class='table table-bordered table-striped'>
                            <tr>
                                <td colspan='5' align='center'> <a href='index.php' class='btn bg-primary text-white'> Add New Record </a> </td>
                            </tr>
                            <tr class='bg-primary'>
                                <th> Name </th>
                                <th> Gender </th>
                                <th> DOB </th>
                                <th> Country </th>
                                <th> Hobbies </th>
                            </tr>
                ");

                foreach($Result as $Data){
                    echo("
                        <tr>
                            <td> $Data[FullName] </td>
                            <td> $Data[Gender] </td>
                            <td> $Data[DOB] </td>
                            <td> $Data[Country] </td>
                            <td> $Data[Hobbies] </td>
                        </tr>
                    ");
                }

                echo("
                        </table>
                    </div>
                ");
            }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Show Data</title>
    </head>
    <body id="BgImage">
        <div class='bg-primary p-3'>
            <form action="" method="post">
                <input type="submit" value="Previous" name="Previous" class='btn Button'>
                <input type="submit" value="Next"     name="Next"     class='btn Button'>
                <input type="submit" value="First"    name="First"    class='btn Button'>
                <input type="submit" value="Last"     name="Last"     class='btn Button'>
            </form>
        </div>
    </body>

    <?php
        include("../Connect/Connection.php");
    ?>
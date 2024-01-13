<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Audio</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="AudioUpload" id="">
            <input type="submit" name="Upload" value="Upload">
        </form>
    </body>

    <?php
        if(isset($_POST["Upload"])){

            $TempName = $_FILES["AudioUpload"]["tmp_name"];
            $FileName = $_FILES["AudioUpload"]["name"];

            move_uploaded_file($TempName, "Audios/".$FileName);
        }
    ?>
</html>
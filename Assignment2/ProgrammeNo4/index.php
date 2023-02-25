<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Programme No.4</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row text-center p-3">
                    <div class="col h3 text-white"> File Upload</div>
                </div>
                <div class="row p-3">
                    <div class="col-md-3 text-center ForFont"> File :</div>
                    <div class="col-md-9">
                        <input type="file" name="Image" class="form-control TextBox" required accept=".jpg,.jpeg,.png"/>
                    </div>
                </div>

                <div class="row text-center p-3">
                    <div class="col-md-6">
                        <input type="submit" value="Upload" name="Upload" class="btn Button"/>
                    </div>
                    <div class="col-md-6">
                        <input type="reset" value="Cancel" class="btn Button">
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php
        if(isset($_POST['Upload'])){

            session_start();

            $_SESSION['File'] = "Users/".$_FILES['Image']['name'];

            move_uploaded_file($_FILES['Image']['tmp_name'] , "Users/".$_FILES['Image']['name']);

            header("location: DisplayImages.php");
        }
    ?>
</html>
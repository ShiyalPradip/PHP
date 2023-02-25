<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Programme No.8</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row text-center p-3">
                    <div class="col h3 text-white"> Image Upload</div>
                </div>
                <div class="row p-3">
                    <div class="col-md-3 text-center ForFont"> Image :</div>
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

            $FileSize = $_FILES['Image']['size'];

            if($FileSize < 1000000){
                
                session_start();
                
                $_SESSION['File'] = "Users/".$_FILES['Image']['name'];
                
                $File = $_FILES['Image']['tmp_name'];
                $Dest = $_FILES['Image']['name'];
                
                move_uploaded_file($File,"Users/".$Dest);
                
                header("location: DisplayImages.php");
       
            }else{
                echo("
                    <script>
                        alert('Image Size Must Be 1 MB Only');
                        window.location.href='index.php';
                    </script>
                ");
            }
        }
    ?>
</html>
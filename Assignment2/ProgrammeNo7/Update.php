<?php
   include("../../Connect/Connection.php");

   session_start();

   if($_SESSION['Username']!=NULL){
        
        $UpdateId = $_SESSION['Update'];

        $Select = "select * from login_logout where Id=$UpdateId";
        $Trigger = $Connect->query($Select);

        if($Trigger){

            foreach($Trigger as $Data){
                $Name       = $Data['Name'];
                $Username   = $Data['Username'];
                $Password   = $Data['Password'];
                $MasterPass = $Data['MasterPass'];
                $Email      = $Data['Email'];
                $Gender     = $Data['Gender'];
                $ContactNo  = $Data['ContactNo'];
                $Profile    = $Data['Profile'];
            }
        }
    }else{
        echo("
            <script>
                alert('You Must Create An Account To Access This Webpage');
                window.location.href='index.php';
            </script>
        ");
    }
?>

<?php

    $Image = $Profile;
    $Upload=0;

    if(isset($_POST['Upload'])){

        $Image = "Photos/".$_FILES['Photo']['name'];

        $Name       = $_POST['Name'];
        $Username   = $_POST['Username'];
        $Password   = $_POST['Password'];
        $MasterPass = $_POST['MasterPass'];
        $Email      = $_POST['Email'];
        $Gender     = $_POST['Gender'];
        $ContactNo  = $_POST['ContactNo'];

        $FileSize = $_FILES['Photo']['size'];
        $File = $_FILES['Photo']['tmp_name'];
        $Dest = $_FILES['Photo']['name'];

        if($FileSize < 1000000){
            
            move_uploaded_file($File,"Photos/".$Dest);
            $Upload=1;

        }else{
            echo("
                <script>
                    alert('Image Size Must Be 1 MB Only');
                </script>
            ");

            $Image = $Profile;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-9">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Update</title>
    </head>
    <body id="BgImage">
        <div class="container w-50 bg-dark ForDiv">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-3 pt-2  text-center">
                        <img src="<?php echo $Image; ?>" alt="" class="UserProfile img-fluid">
                    </div>   
                    
                    <div class="col-6 File">
                        <input type="file" name="Photo" id="" class="form-control TextBox" title="Upload Your Photo Here" required accept=".jpg,.jpeg,.png" <?php if($Upload==1){ echo("disabled"); } ?>>
                        <input type="hidden" name="Path" value="<?php echo @$Image; ?>">
                    </div>

                    <div class="col-3 File">
                        <input type="submit" value="Upload" name="Upload" class="btn Button" <?php if($Upload==1){ echo("disabled"); } ?> >
                    </div>
                </div> <hr class="border border-bottom-3 border-white"/>

                <div class="row p-1">
                    <div class="col-3 ForFont"> Name </div>
                    <div class="col-9">
                        <input type="text" name="Name" id="" class="form-control TextBox" placeholder="Enter Your Name Here" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || (event.charCode==32)" value="<?php echo @$Name; ?>">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> Username </div>
                    <div class="col-9">
                        <input type="text" name="Username" id="" class="form-control TextBox" placeholder="Enter Your Username Here" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)" value="<?php echo @$Username; ?>">
                    </div>
                </div>
    
                <div class="row p-2">
                    <div class="col-3 ForFont"> Password </div>
                    <div class="col-9">
                        <input type="password" name="Password" id="" class="form-control TextBox" placeholder="Enter Your Password Here" required minlength="9" maxlength="18" value="<?php echo @$Password; ?>">
                    </div>
                </div>
    
                <div class="row p-2"> 
                    <div class="col-3 ForFont"> MasterPass</div>
                    <div class="col-9">
                        <input type="password" name="MasterPass" class="form-control TextBox" placeholder="Master Password [For Forgot Password]" required minlength="9" maxlength="18" value="<?php echo @$MasterPass; ?>"> 
                    </div>
                </div>
                
                <div class="row p-2">
                    <div class="col-3 ForFont"> Email </div>
                    <div class="col-9">
                        <input type="email" name="Email" id="" class="form-control TextBox" placeholder="Enter Your Email Here" required value="<?php echo @$Email; ?>">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> Gender</div>
                    <div class="col-9 text-white">
                        <input type="radio" name="Gender" id="" value="Male"   class="form-check-input Check-Radio" <?php if(@$Gender=='Male')   echo("checked"); ?>> Male
                        <input type="radio" name="Gender" id="" value="Female" class="form-check-input Check-Radio" <?php if(@$Gender=='Female') echo("checked"); ?>> Female
                        <input type="radio" name="Gender" id="" value="Other"  class="form-check-input Check-Radio" <?php if(@$Gender=='Other')  echo("checked"); ?>> Other
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-3 ForFont"> Contact No </div>
                    <div class="col-9">
                        <input type="tel" name="ContactNo" id="" class="form-control TextBox" placeholder="Enter Your Contact Number Here" minlength="10" maxlength="10" required onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="<?php echo @$ContactNo; ?>">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col text-center">
                        <input type="submit" value="Update" name="Update" class="btn Button" <?php if($Upload==1){ }else{ echo("disabled"); } ?> >
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        include("../../Connect/Connection.php");

        if(isset($_POST['Update'])){

            $Name       = $_POST['Name'];
            $Username   = $_POST['Username'];
            $Password   = $_POST['Password'];
            $MasterPass = $_POST['MasterPass'];
            $Email      = $_POST['Email'];
            $Gender     = $_POST['Gender'];
            $ContactNo  = $_POST['ContactNo'];
            $Path       = $_POST['Path'];

            $Update = "update login_logout set Name='$Name', Username='$Username', Password='$Password', MasterPass='$MasterPass', Email='$Email', Gender='$Gender', ContactNo='$ContactNo', Profile='$Path' where Id=$UpdateId";
            $Trigger = $Connect->query($Update);

            if(!$Trigger){
                echo("
                    <script>
                        alert('Record Not Updated');
                    </script>
                ");
            }else{
                echo("
                    <script>
                        alert('Record Has Been Updated');
                        window.location.href='Welcome.php';
                    </script>
                ");
            }
        }
    ?>
</html>
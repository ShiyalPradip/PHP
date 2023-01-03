<?php
    include('Connect.php');

    $UpdateRollNo = $_REQUEST['TempRollNo'];

    $Select = "select * from databaseoperations where RollNo=$UpdateRollNo";
    $Trigger = $Connect->query($Select);

    foreach($Trigger as $Data){
        $RollNo = $Data['RollNo'];
        $Name = $Data['Name'];
        $Email = $Data['Email'];
    }
?>

<html>
    <head>
        <title> Update Record </title>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/Style.css">
    </head>
    <body style="background-image: url(Images/BGImage.jpg); background-size: cover;">
        <div class="container w-50 Form">
            <form action="" method="post">
                <div class="row text-center ">
                    <div class="col Heading"> Update Record </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 Font"> Name :</div>
                    <div class="col-8"> 
                        <input type="text" name="Name" id="" class="form-control TxtBox" placeholder="<?php echo('$Name'); ?>" required/>
                    </div>
                </div>

                 <div class="row p-2">
                    <div class="col-4 Font"> Email :</div>
                    <div class="col-8"> 
                        <input type="email" name="Email" id="" class="form-control TxtBox" placeholder="<?php echo('$Email'); ?>" required/>
                    </div>
                </div>

                <div class="row text-center p-3">
                    <div class="col-4"> 
                        <input type="submit" value="Update Record" name="Button" class="Add">
                    </div>
                    <div class="col-4"> 
                        <a href="ShowData.php" target="_blank" class="btn Show"> Show Records </a>
                    </div> 
                    <div class="col-4"> 
                        <input type="reset" value="Clear" class="Add"/>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        if(isset($_POST['Button'])){
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];

            $Update = "update databaseoperations set Name='$Name', Email='$Email' where RollNo=$UpdateRollNo";

            $Trigger = $Connect->query($Update);

            if(!$Trigger){
                echo("
                    <script>
                        alert('The Record Has Not Been Updated');
                    </script>
            ");
            }else{
                echo("
                    <script>
                        window.loaction.href='ShowData.php';
                    </script>
                ");
            }
        }
    ?>
</html>
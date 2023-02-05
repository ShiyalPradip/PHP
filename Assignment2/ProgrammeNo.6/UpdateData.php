<?php
    include("../Connect/Connection.php");

    $TempBookId = $_REQUEST['Id'];

    $Select = "select * from bookmaster where BookId=$TempBookId";

    $Trigger = $Connect->query($Select);

    if(!$Trigger){
        echo("
            <script>
                alert('No Data Came From The Database');
            </script>
        ");
    }else{
        foreach($Trigger as $Data){
            $BookName   = $Data['BookName'];
            $AuthorName = $Data['AuthorName'];
            $Price      = $Data['Price'];
            $Quantity   = $Data['Quantity'];

            $NetAmount = $Quantity * $Price;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Update Record </title>
</head>
    <body style="background-image: url('../Images/Bg.png'); background-size: cover;">
        <div class="container bg-dark w-50 text-white ForDiv">
            <form action="" method="post">
                <div class="row text-center p-3">
                    <div class="col h3">Book Master</div>
                </div>
                <div class="row p-2">
                    <div class="col-4 ForFont">Book Name</div>
                    <div class="col-8">
                        <input type="text" name="BookName" id="" placeholder="<?php echo $BookName; ?>" class="form-control TextBox" required  onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Author Name </div>
                    <div class="col-8">
                        <input type="text" name="AuthorName" id="" placeholder="<?php echo $AuthorName; ?>" class="form-control TextBox" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Price</div>
                    <div class="col-8">
                        <input type="number" name="Price" id="" placeholder="<?php echo $Price; ?>" class="form-control TextBox" required  onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Quantity</div>
                    <div class="col-8">
                        <input type="number" name="Quantity" id="" placeholder="<?php echo $Quantity; ?>" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Net Amount</div>
                    <div class="col-8">
                        <input type="number" name="NetAmount" id="" placeholder="<?php echo $NetAmount; ?>" class="form-control TextBox" readonly/>


                    </div>             
                </div>

                <div class="row p-3">
                    <div class="col-4">
                        <a href="ShowData.php"  class="btn Button"> Show Data </a>
                    </div>
                    <div class="col-4">
                        <input type="submit" value="Update Record" name="Button" class="btn Button">
                    </div>
                    <div class="col-4">
                        <input type="reset" value="Clear Form" name="Clr" class="btn Button">
                    </div>
                </div>
            </form>
        </div>    
    </body>
    <?php
        include("../Connect/Connection.php");

        if(isset($_POST['Button'])){

            $BookName   = $_POST['BookName'];
            $AuthorName = $_POST['AuthorName'];
            $Price      = $_POST['Price'];
            $Quantity   = $_POST['Quantity'];

            $NetAmount = $Quantity * $Price;

            $Update = "update bookmaster set BookName='$BookName', AuthorName='$AuthorName', Price='$Price', Quantity='$Quantity', NetAmount='$NetAmount' where BookId=$TempBookId";

            $Trigger = $Connect->query($Update);

            if(!$Trigger){
                echo("
                    <script>
                        alert('Record Is Not Uepdated');
                    </script>
                ");         
            }else{
                header("location: ShowData.php");
            }
        }
    ?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Add Record</title>
</head>
    <body id="BgImage">
        <div class="container bg-dark w-50 text-white ForDiv">
            <form action="" method="post">
                <div class="row text-center p-3">
                    <div class="col h3">Book Master</div>
                </div>
                <div class="row p-2">
                    <div class="col-4 ForFont">Book Name</div>
                    <div class="col-8">
                        <input type="text" name="BookName" id="" placeholder="Enter a Book Name Here" class="form-control TextBox" required onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || event.charCode==32">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Author Name </div>
                    <div class="col-8">
                        <input type="text" name="AuthorName" id="" placeholder="Enter Author Name Here" class="form-control TextBox" required  onkeypress="return(event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122) || event.charCode==32">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Price</div>
                    <div class="col-8">
                        <input type="number" name="Price" id="" placeholder="Enter Price Here" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Quantity</div>
                    <div class="col-8">
                        <input type="number" name="Quantity" id="" placeholder="Enter Quantity Here" class="form-control TextBox" required onkeypress="return(event.charCode>=48 && event.charCode<=57)">
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-4 ForFont">Net Amount</div>
                    <div class="col-8">
                        <input type="number" name="NetAmount" id="" placeholder="The Net Amount Will Be Automatically Generated" class="form-control TextBox" readonly/>
                    </div>             
                </div>

                <div class="row p-3">
                    <div class="col-4">
                        <a href="index.php"  class="btn Button"> Show Data </a>
                    </div>
                    <div class="col-4">
                        <input type="submit" value="Add Record" name="Button" class="btn Button">
                    </div>
                    <div class="col-4">
                        <input type="reset" value="Clear Form" name="Clr" class="btn Button">
                    </div>
                </div>
            </form>
        </div>    
    </body>
    <?php
        include("../../Connect/Connection.php");

        if(isset($_POST['Button'])){

            $BookName   = $_POST['BookName'];
            $AuthorName = $_POST['AuthorName'];
            $Price      = $_POST['Price'];
            $Quantity   = $_POST['Quantity'];

            $NetAmount = $Quantity * $Price;

            $Insert = "insert into bookmaster(BookName,AuthorName,Price,Quantity,NetAmount) values('$BookName ','$AuthorName','$Price ','$Quantity','$NetAmount')";

            $Trigger = $Connect->query($Insert);

            if(!$Trigger){
                echo("
                    <script>
                        alert('Record Is Not Inserted');
                    </script>
                ");         
            }else{
                echo("
                    <script>
                        alert('Record has Been ');
                        window.location.href='TempPage.php';
                    </script>
                ");
            }
        }
    ?>
</html>
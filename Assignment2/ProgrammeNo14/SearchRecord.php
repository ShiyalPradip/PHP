<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='../CSS/bootstrap.min.css'>
        <link rel='stylesheet' href='../CSS/style.css'>
        <link rel='stylesheet' href='../CSS/ProgrammeNo7.css'>

        <title>Search Record</title>
    </head>
    <body id='BgImage'>
        <div class='bg-dark p-3'>
            <form method='post'>
                <div class='row'>
                    <div class='col-4'> 
                        <input type='text' name='Name' class='form-control TextBox' placeholder='Search Record By Name'/>
                    </div>

                    <div class='col-2'> 
                        <input type='submit' value='Search' name='Button_Name' class='btn Button'/>
                    </div>

                    <div class='col-4'> 
                        <input type='email' name='Email' class='form-control TextBox' placeholder='Search Record By Email'/>
                    </div>

                    <div class='col-2'> 
                        <input type='submit' value='Search' name='Button_Email' class='btn Button'/>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        include("../Connect/Connection.php");

        if(isset($_POST['Button_Name'])){

            $SearchName = $_POST['Name'];

            $Select = "select * from student_reg where Name='$SearchName'";

            $Trigger = $Connect->query($Select);

            $CountRows = mysqli_num_rows($Trigger);
           
            if($CountRows>0){
                
                echo("
                    <script>
                        alert('A Record Of The Name ".$SearchName." Has Been Found');
                    </script>
                ");

                foreach($Trigger as $Data){
                    $Id       = $Data['Id'];
                    $Name     = $Data['Name'];
                    $Gender   = $Data['Gender'];
                    $Hobbies  = $Data['Hobbies'];
                    $Address  = $Data['Address'];
                    $Country  = $Data['Country'];
                    $PinCode  = $Data['Pincode'];
                    $Mobile   = $Data['Mobile'];
                    $Email    = $Data['Email'];
                }

                echo("
                    <div class='container For-Shadow text-white w-50 mt-5'>
                        <div class='row p-3 Fields-Data'>
                            <div class='col-6'> User Id :  $Id </div>
                            <div class='col-6'> Your Name : $Name </div>
                        </div>

                        <div class='row p-3'> <div class='col-6 Data'> Gender :  </div> <div class='col-6 Fields-Data'> $Gender  </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Hobbies : </div> <div class='col-6 Fields-Data'> $Hobbies </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Country : </div> <div class='col-6 Fields-Data'> $Country </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Address : </div> <div class='col-6 Fields-Data'> $Address </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> PinCode : </div> <div class='col-6 Fields-Data'> $PinCode </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Mobile :  </div> <div class='col-6 Fields-Data'> $Mobile  </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Email :   </div> <div class='col-6 Fields-Data'> $Email   </div> </div>
                    </div>
                ");
            }else{
                echo("
                    <script>
                        alert('There Is No Record Of The Name ".$SearchName." In Database');
                        window.location.href='SearchRecord.php';
                    </script>
                ");
            }

        }elseif(isset($_POST['Button_Email'])){

            $SearchEmail = $_POST['Email'];

            $Select = "select * from student_reg where Email='$SearchEmail'";

            $Trigger = $Connect->query($Select);

            $CountRows = mysqli_num_rows($Trigger);

            if($CountRows>0){
                
                echo("
                    <script>
                        alert('A Record Of The Email ".$SearchEmail." Has Been Found');
                    </script>
                ");

                foreach($Trigger as $Data){
                    $Id       = $Data['Id'];
                    $Name     = $Data['Name'];
                    $Gender   = $Data['Gender'];
                    $Hobbies  = $Data['Hobbies'];
                    $Address  = $Data['Address'];
                    $Country  = $Data['Country'];
                    $PinCode  = $Data['Pincode'];
                    $Mobile   = $Data['Mobile'];
                    $Email    = $Data['Email'];
                }

                echo("
                    <div class='container For-Shadow text-white w-50 mt-5'>
                        <div class='row p-3 Fields-Data'>
                            <div class='col-6'> User Id :  $Id </div>
                            <div class='col-6'> Your Name : $Name </div>
                        </div>

                        <div class='row p-3'> <div class='col-6 Data'> Gender :  </div> <div class='col-6 Fields-Data'> $Gender  </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Hobbies : </div> <div class='col-6 Fields-Data'> $Hobbies </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Country : </div> <div class='col-6 Fields-Data'> $Country </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Address : </div> <div class='col-6 Fields-Data'> $Address </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> PinCode : </div> <div class='col-6 Fields-Data'> $PinCode </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Mobile :  </div> <div class='col-6 Fields-Data'> $Mobile  </div> </div>
                        <div class='row p-3'> <div class='col-6 Data'> Email :   </div> <div class='col-6 Fields-Data'> $Email   </div> </div>
                    </div>
                ");
            }else{
                echo("
                    <script>
                        alert('There Is No Record Of The Email ".$SearchEmail." In Database');
                        window.location.href='SearchRecord.php';
                    </script>
                ");
            }
        }
    ?>
</html>
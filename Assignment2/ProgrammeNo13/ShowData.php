<?php
    session_start();  

    if($_SESSION['Rows']==-1){

        echo("
            <script>
                alert('There Is No Record In The Database');
                window.location.href='index.php';
            </script>
        ");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <link rel="stylesheet" href="../CSS/ShowData.css">
        <title>Show Data</title>
    </head>
    <body id="BgImage">
        <div class='bg-primary p-3'>
            <form action="" method="post">
                <div class="row bordre">
                    <div class="col-1"> <input type="submit" value="Previous" name="Previous" class='btn Button'> </div>
                    <div class="col-1"> <input type="submit" value="Next"     name="Next"     class='btn Button'> </div>
                    <div class="col-1"> <input type="submit" value="First"    name="First"    class='btn Button'> </div>
                    <div class="col-1"> <input type="submit" value="Last"     name="Last"     class='btn Button'> </div>
                    <div class="col-6 text-center"> <b class='text-white'>Total Records :</b><input type="text" name="Total" class='TotalBox'  value="<?php echo @$_SESSION['Rows']+1; ?>" id="" readonly> </div>
                    <div class="col-1"> <a href="index.php" class='btn Button float-end'> Insert </a> </div>
                    <div class="col-1"> <a href="Delete.php" class='btn Button float-end'> Delete </a> </div>
                </div>
            </form>
        </div>
    </body>

    <?php
        function DisplayTable($Temp){
            echo("
                <div class='container text-white w-50 mt-3 ShowData'>
                    <div class='row p-2 text-center'> <div class='col-6'> Id            </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Id'].          "</div> </div>
                    <div class='row p-3 text-center'> <div class='col-6'> Name          </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Name'].        "</div> </div>
                    <div class='row p-2 text-center'> <div class='col-6'> Email         </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Email'].       "</div> </div>
                    <div class='row p-3 text-center'> <div class='col-6'> Mobile No     </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Mobile_No'].   "</div> </div>
                    <div class='row p-2 text-center'> <div class='col-6'> Gross Salary  </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Gross_Salary']."</div> </div>
                    <div class='row p-3 text-center'> <div class='col-6'> Net Salary    </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Net_Salary'].  "</div> </div>
                    <div class='row p-2 text-center'> <div class='col-6'> Basic Salary  </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Basic_Salary']."</div> </div>
                    <div class='row p-3 text-center'> <div class='col-6'> Ta            </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Ta'].          "</div> </div>
                    <div class='row p-2 text-center'> <div class='col-6'> Da            </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Da'].          "</div> </div>
                    <div class='row p-3 text-center'> <div class='col-6'> Hra           </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Hra'].         "</div> </div>
                    <div class='row p-2 text-center'> <div class='col-6'> Pf            </div> <div class='col-6'>".$_SESSION['AllData'][$Temp]['Pf'].          "</div> </div>
                </div>
            ");

            $_SESSION['Delete'] = $_SESSION['AllData'][$Temp]['Id'];
        }

        if($_SESSION['Main']==1){
            
            DisplayTable(0);
            $_SESSION['Main']=0;
            $_SESSION['Index']=0;
        
        }elseif(isset($_POST['Previous'])){

            $Data = $_SESSION['Index'] - 1;
            if($Data==-1){

                $Data = $_SESSION['Rows']; 
            }
            
            DisplayTable($Data);

            $_SESSION['Index'] = $Data;
        
        }elseif(isset($_POST['Next'])){

            $Data = $_SESSION['Index']+1;

            if($Data > $_SESSION['Rows']){
                
                $Data = 0;
            }

            DisplayTable($Data);

            $_SESSION['Index'] = $Data;

        }elseif(isset($_POST['First'])){

            DisplayTable(0);
            $_SESSION['Index'] = 0;

        }elseif(isset($_POST['Last'])){
            
            DisplayTable($_SESSION['Rows']);
            
            $_SESSION['Index'] = $_SESSION['Rows'];
        }
    ?>
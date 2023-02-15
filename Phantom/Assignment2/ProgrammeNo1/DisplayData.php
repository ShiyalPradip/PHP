<?php

    $Username = $_POST['Username'];
    $Gender   = $_POST['Gender'];
    $Temp     = $_POST['Course'];
    $Course   = implode(",",$Temp);
    $City     = $_POST['City'];
    $PhoneNo  = $_POST['PhoneNo'];

    echo("
        <link rel='stylesheet' href='../CSS/bootstrap.min.css'>
        <link rel='stylesheet' href='../CSS/Style.css'>
        <link rel='stylesheet' href='../CSS/ProgrammeNo7.css'>
        <body id='BgImage'> </body>
    ");

    echo("
        <div class='container For-Shadow text-white w-50 mt-5'>
            <div class='row p-3'> <div class='col-6 Data'> Username :  </div> <div class='col-6 Fields-Data'> $Username </div> </div>
            <div class='row p-3'> <div class='col-6 Data'> Gender :    </div> <div class='col-6 Fields-Data'> $Gender   </div> </div>
            <div class='row p-3'> <div class='col-6 Data'> Course :    </div> <div class='col-6 Fields-Data'> $Course   </div> </div>
            <div class='row p-3'> <div class='col-6 Data'> City :      </div> <div class='col-6 Fields-Data'> $City     </div> </div>
            <div class='row p-3'> <div class='col-6 Data'> Phone No :  </div> <div class='col-6 Fields-Data'> $PhoneNo  </div> </div>
        </div>
");

?>
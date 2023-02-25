<?php
    include("../../Connect/Connection.php");

    echo("
        <link rel='stylesheet' href='../CSS/bootstrap.min.css'>
        <link rel='stylesheet' href='../CSS/Style.css'>
        <title>Welcome To Home Page</title>
    ");

    session_start();

    if($_SESSION['Username'] != NULL){
        echo("
            <body Id='BgImage'>
                <form method='post'>
                    <table class='table  table=bordered bg-dark text-white'>
                        <tr align='center'> 
                            <td> <h4> Welcome To Home Page</h4> </td>
                            <td>
                                <button  type='submit' name='LogOut' class='btn Button'> LogOut </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </body>
        ");
    }else{

        echo("
            <script>
                alert('You Do Not Have An Account To Access This WebPage');
                window.location.href='index.php';
            </script>
        ");
    }

    if(isset($_POST['LogOut'])){

        session_destroy();

        header("location:index.php");
    }
?>
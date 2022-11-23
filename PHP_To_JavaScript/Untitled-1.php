<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            Name :- <input type="text" name="F_Name" id="">
            Age :- <input type="number" name="Age" id="">
            <input type="submit" value="Clik Me" name="Click" onclick="Fun()"/>
        </form>

        <?php
            if(isset($_POST['Click'])){
                $N = $_POST['F_Name'];
                $A = $_POST['Age'];
            }
        ?>

        <script type="text/javascript">
            function Fun(){
                var Temp = "<?php echo $N; ?>"

                alert(Temp);
            }
        </script>
    </body>
</html>
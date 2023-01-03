<?php 
    include("connection.php");
?>

<?php 

    $select="select * from student";
    $result=$conn->query($select);

    echo "<div class='container mt-4'>";
        echo "<a href='add.php' class='btn bg-dark text-white'>Add Record</a>";
    echo "</div>";

    echo "<table class='container table'>";
        echo "<tr><th>Roll</th><th>Name</th><th>Email</th><th>Action</th></tr>";
        foreach($result as $row)
        {
            echo "<tr>";
                echo "<td>$row[roll]</td>";
                echo "<td>$row[name]</td>";
                echo "<td>$row[email]</td>";
                echo "<td><a href='delete.php?x=$row[roll]' class='btn bg-danger text-white m-1'>Delete</a><a href='update.php?x=$row[roll]' class='btn bg-primary text-white'>Edit</a></td>";
            echo "</tr>";
        }

    echo "</table>";

?>
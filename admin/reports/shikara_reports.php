
	<?php
    $dbc = mysqli_connect("localhost", "root", "", "kashmir");

    $sql = "SELECT id, cname FROM bookshikara";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<br> Id: " . $row["id"] . " - Customer Name: " . $row["cname"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $dbc->close();
    ?>
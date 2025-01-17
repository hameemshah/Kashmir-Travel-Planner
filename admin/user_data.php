<?php
    $page_title = 'View the Current Users'; 
    include 'partials/header.php';
    include 'config/loggedin.php';
    
    //Database Query
    $q = "SELECT s_no, username, password, create_time FROM users ORDER BY create_time ASC";
    $r = @mysqli_query($dbc, $q);
    ?>
    <div class="grid-container">
    <div class="grid-item1">
      <?php include 'partials/nav.php'; ?>
    </div>
    <div class="grid-item2">
        <?php
        echo '<h1 style="text-align: center">Registered Users</h1>';
    if ($r) {
        echo "<h4 style='text-align: center'>You are logged in as, {$_SESSION['username']}</h4>";
        echo "<table align='center' cellspacing='3' cellpadding='3' width='75%' border>
                    <tr>
                        <th align='left'><b>Username</b></th>
                        <th align='left'><b>Password</b></th>
                        <th align='left'><b>Register Date & Time</b></th>
                        <th align='left'>Edit</th>
                    </tr>";
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<tr>
                        <td align="left">' . $row['username'] . '</td>
                        <td align="left">' . $row['password'] . '</td>
                        <td align="left">' . $row['create_time'] . '</td>
                        <td align="left"><a href="delete.php?user_id=' .  $row['s_no'] . ' ">Delete<a> | <a href="change.php?user_id=' . $row['s_no'] . '">Edit</a></td>
                     </tr>';
        }
        echo '</table>';
        mysqli_free_result($r); //Free up the resources. 
    }
    else { //If it did not run.
        //Public message
        echo '<p class="error">The current users could not be retrieved.';

        //Debugging message
        echo '<p>' . mysqli_error($dbc) . '<br/><br/> Query : ' . $q . '</p>';
}
?>
</div>
</div>
<?php
include 'partials/footer.php';
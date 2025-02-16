<?php
$page_title = "Food";
include 'partials/header.php';
include 'config/loggedin.php';

// Fetch all food records
$query = "SELECT * FROM foods";
$result = mysqli_query($dbc, $query);
?>
<div class="grid-container">
    <div class="grid-item1">
        <?php include 'partials/nav.php'; ?>
    </div>
    <div class="grid-item2">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Property</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['Name']) ?></td>
                    <td><?= htmlspecialchars($row['Property']) ?></td>
                    <td><?= htmlspecialchars($row['Email']) ?></td>
                    <td><?= htmlspecialchars($row['Mobile_No']) ?></td>
                    <td><?= htmlspecialchars($row['City']) ?></td>
                    <td><?= htmlspecialchars($row['Address']) ?></td>
                    <td><?= htmlspecialchars($row['Type']) ?></td>
                    <td><img src="../assets/img/foods/<?= htmlspecialchars($row['Pic1']) ?>" width="100"></td>
                    <td>
                        <a href="edit_food.php?email=<?= urlencode($row['Email']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_food.php?email=<?= urlencode($row['Email']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>


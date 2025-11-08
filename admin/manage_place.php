<?php
$page_title = "Places";
include 'partials/header.php';
include 'config/loggedin.php';

// Fetch all hotel records
$query = "SELECT * FROM places";
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
                    <th>Type</th>
                    <th>District</th>
                    <th>Distance</th>
                    <th>Popular</th>
                    <th>Popular</th>
                    <th>Popular</th>
                    <th>Detail</th>
                    <th>Pic</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['type']) ?></td>
                    <td><?= htmlspecialchars($row['district']) ?></td>
                    <td><?= htmlspecialchars($row['distance']) ?></td>
                    <td><?= htmlspecialchars($row['pop1']) ?></td>
                    <td><?= htmlspecialchars($row['pop2']) ?></td>
                    <td><?= htmlspecialchars($row['pop3']) ?></td>
                    <td><?= substr(htmlspecialchars($row['detail']), 0, 10) ?></td>
                    <td>
                        <img src="../assets/img/places/<?= !empty($row['pic1']) ? htmlspecialchars($row['pic1']) : 'default.jpg' ?>" width="100">
                    </td>
                    <td>
                        <a href="edit_place.php?id=<?= urlencode($row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_place.php?id=<?= urlencode($row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
$page_title = "Hotels";
include 'partials/header.php';
include 'config/loggedin.php';

// Fetch all hotel records
$query = "SELECT * FROM hotels";
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
                    <th>Owner</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['owner']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['mobile']) ?></td>
                    <td><?= htmlspecialchars($row['city']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><?= htmlspecialchars($row['type']) ?></td>
                    <td><?= htmlspecialchars($row['amount']) ?></td>
                    <td>
                        <img src="../assets/img/hotels/<?= !empty($row['pic1']) ? htmlspecialchars($row['pic1']) : 'default.jpg' ?>" width="100">
                    </td>
                    <td>
                        <a href="edit_hotel.php?id=<?= urlencode($row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete_hotel.php?id=<?= urlencode($row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
$page_title = "Manage Shikara";
include 'partials/header.php';
include 'config/loggedin.php';

$query = "SELECT * FROM shik";
$result = mysqli_query($dbc, $query);
?>

<div class="grid-container">
  <div class="grid-item1">
    <?php include 'partials/nav.php'; ?>
  </div>
  <div class="grid-item2">
    <div class="container my-4 p-4 border rounded">
      <h2 class="mb-4 text-center">Manage Shikara</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Proprietor</th>
            <th>City</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo htmlspecialchars($row['name']); ?></td>
              <td><?php echo htmlspecialchars($row['email']); ?></td>
              <td><?php echo htmlspecialchars($row['city']); ?></td>
              <td>
                <a href="edit_shikara.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_shikara.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>

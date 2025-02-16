<?php
$page_title = "Admin Dashboard";
include 'partials/header.php';
include 'config/loggedin.php';
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
            <div class="sidebar-sticky">
                <?php include 'partials/nav.php'; ?>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h2 class="mt-4">Welcome to the Admin Panel</h2>
            
            <div class="row mt-4">
                <!-- Dashboard Cards -->
                <div class="col-md-3">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Hotels</h5>
                            <p class="card-text">Manage hotel listings</p>
                            <a href="manage_hotel.php" class="btn btn-light btn-sm">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Food</h5>
                            <p class="card-text">Manage food orders</p>
                            <a href="manage_food.php" class="btn btn-light btn-sm">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Tourist Places</h5>
                            <p class="card-text">Manage destinations</p>
                            <a href="manage_place.php" class="btn btn-light btn-sm">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Shikaras</h5>
                            <p class="card-text">Manage boat rentals</p>
                            <a href="manage_shikara.php" class="btn btn-light btn-sm">Go</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <a href="add_hotel.php" class="btn btn-primary">Add Hotel</a>
                    <a href="add_food.php" class="btn btn-success">Add Food</a>
                    <a href="add_place.php" class="btn btn-info">Add Place</a>
                    <a href="add_shikara.php" class="btn btn-warning">Add Shikara</a>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include 'partials/footer.php'; ?>

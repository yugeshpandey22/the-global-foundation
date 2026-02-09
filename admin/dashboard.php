<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">The Global Rise Foundation Admin</a>
            <a href="logout.php" class="btn btn-light btn-sm text-success fw-bold">Logout</a>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="mb-4">Welcome, Admin</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <a href="manage_gallery.php" class="text-decoration-none">
                    <div class="card shadow-sm h-100 hover-shadow text-center p-4">
                        <i class="fa-solid fa-images fs-1 text-success mb-3"></i>
                        <h4 class="text-dark">Manage Gallery</h4>
                        <p class="text-secondary">Add, edit, or delete photos in the gallery.</p>
                    </div>
                </a>
            </div>
            <!-- Future modules can be added here -->
        </div>
    </div>
</body>
</html>

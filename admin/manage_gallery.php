<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

include '../includes/db.php';

// Handle Image Upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    
    $target_dir = "../assets/uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $db_path = "assets/uploads/" . basename($_FILES["image"]["name"]);
            $sql = "INSERT INTO gallery (title, category, image_path) VALUES ('$title', '$category', '$db_path')";
            if ($conn->query($sql) === TRUE) {
                $success = "Image uploaded successfully.";
            } else {
                $error = "Database Error: " . $conn->error;
            }
        } else {
            $error = "Sorry, there was an error uploading your file.";
        }
    } else {
        $error = "File is not an image.";
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "SELECT image_path FROM gallery WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = "../" . $row['image_path'];
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        $conn->query("DELETE FROM gallery WHERE id=$id");
        header("Location: manage_gallery.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">The Global Rise Foundation Admin</a>
            <a href="logout.php" class="btn btn-light btn-sm text-success fw-bold">Logout</a>
        </div>
    </nav>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Manage Gallery</h2>
            <a href="dashboard.php" class="btn btn-outline-secondary">Back to Dashboard</a>
        </div>

        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <!-- Upload Form -->
        <div class="card shadow-sm p-4 mb-5">
            <h5 class="mb-3">Add New Image</h5>
            <form method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" name="title" class="form-control" placeholder="Image Title" required>
                    </div>
                    <div class="col-md-3">
                        <select name="category" class="form-select" required>
                            <option value="Education">Education</option>
                            <option value="Health">Health</option>
                            <option value="Empowerment">Empowerment</option>
                            <option value="Events">Events</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="upload" class="btn btn-success w-100">Upload</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Gallery Grid -->
        <h5 class="mb-3">Existing Images</h5>
        <div class="row g-4">
            <?php
            $sql = "SELECT * FROM gallery ORDER BY upload_date DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm">
                            <img src="../'.$row['image_path'].'" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h6 class="card-title fw-bold">'.$row['title'].'</h6>
                                <p class="card-text small text-muted">'.$row['category'].'</p>
                                <div class="d-flex gap-2 mt-3">
                                    <a href="edit_gallery.php?id='.$row['id'].'" class="btn btn-sm btn-warning text-white flex-grow-1 fw-bold"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <a href="manage_gallery.php?delete='.$row['id'].'" class="btn btn-sm btn-danger flex-grow-1 fw-bold" onclick="return confirm(\'Are you sure you want to delete this image?\')"><i class="fa-solid fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo '<div class="col-12"><p class="text-muted text-center py-5">No images found. Upload one to get started!</p></div>';
            }
            ?>
        </div>
    </div>
</body>
</html>

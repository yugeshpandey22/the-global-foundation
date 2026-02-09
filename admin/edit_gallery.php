<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

include '../includes/db.php';

if (!isset($_GET['id'])) {
    header("Location: manage_gallery.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM gallery WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "Image not found.";
    exit;
}

$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $update_image = false;

    // Check if new image is uploaded
    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
             if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                 // Delete old image
                 if (file_exists("../" . $row['image_path'])) {
                     unlink("../" . $row['image_path']);
                 }
                 $new_image_path = "assets/uploads/" . basename($_FILES["image"]["name"]);
                 $update_image = true;
             } else {
                 $error = "Error uploading new image.";
             }
        } else {
            $error = "File is not an image.";
        }
    }

    if (!isset($error)) {
        if ($update_image) {
            $sql = "UPDATE gallery SET title='$title', category='$category', image_path='$new_image_path' WHERE id=$id";
        } else {
            $sql = "UPDATE gallery SET title='$title', category='$category' WHERE id=$id";
        }

        if ($conn->query($sql) === TRUE) {
            header("Location: manage_gallery.php?msg=updated");
            exit;
        } else {
            $error = "Error updating record: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image - The Global Rise Foundation Admin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">The Global Rise Foundation Admin</a>
            <a href="logout.php" class="btn btn-light btn-sm text-success fw-bold">Logout</a>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-white py-3">
                        <h4 class="mb-0">Edit Gallery Image</h4>
                    </div>
                    <div class="card-body p-4">
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Current Image</label>
                                <div class="mb-2">
                                    <img src="../<?php echo $row['image_path']; ?>" alt="Current Image" class="img-thumbnail" style="height: 150px;">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Image Title</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Category</label>
                                <select name="category" class="form-select" required>
                                    <option value="Education" <?php if($row['category'] == 'Education') echo 'selected'; ?>>Education</option>
                                    <option value="Health" <?php if($row['category'] == 'Health') echo 'selected'; ?>>Health</option>
                                    <option value="Empowerment" <?php if($row['category'] == 'Empowerment') echo 'selected'; ?>>Empowerment</option>
                                    <option value="Events" <?php if($row['category'] == 'Events') echo 'selected'; ?>>Events</option>
                                    <option value="Others" <?php if($row['category'] == 'Others') echo 'selected'; ?>>Others</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Change Image (Optional)</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <small class="text-muted">Leave empty to keep the current image.</small>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="update" class="btn btn-success flex-grow-1 fw-bold">Update Image</button>
                                <a href="manage_gallery.php" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "global_rise_db";

echo "Connecting to MySQL...\n";
try {
    $conn = new mysqli($servername, $username, $password);
    echo "Connected successfully.\n";
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage() . "\n");
}

echo "Creating Database '$dbname' if not exists...\n";
try {
    $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
    echo "Database created/verified.\n";
    $conn->select_db($dbname);
    echo "Database selected.\n";
} catch (Exception $e) {
    die("Database Error: " . $e->getMessage() . "\n");
}

echo "Creating 'gallery' table if not exists...\n";
$sql = "CREATE TABLE IF NOT EXISTS gallery (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    category VARCHAR(50),
    upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

try {
    $conn->query($sql);
    echo "Table 'gallery' created/verified successfully.\n";
} catch (Exception $e) {
    die("Table Creation Error: " . $e->getMessage() . "\n");
}

$conn->close();
echo "Setup Complete.\n";
?>

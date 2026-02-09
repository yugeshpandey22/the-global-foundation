<?php
// Enable strict mode for mysqli to throw exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "global_rise_db"; // Using a dedicated DB for this project

try {
    // 1. Connect to MySQL Server
    $conn = new mysqli($servername, $username, $password);
    
    // 2. Create Database if not exists
    $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
    
    // 3. Select Database
    $conn->select_db($dbname);
    
    // 4. Create Gallery Table
    $table_sql = "CREATE TABLE IF NOT EXISTS gallery (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        image_path VARCHAR(255) NOT NULL,
        category VARCHAR(50),
        upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($table_sql);

} catch (Exception $e) {
    // Log detailed error for debugging
    $error_msg = "[" . date('Y-m-d H:i:s') . "] DB Error: " . $e->getMessage() . PHP_EOL;
    file_put_contents(__DIR__ . '/db_error.log', $error_msg, FILE_APPEND);
    
    // Show a user-friendly message
    die("<h2>Database Setup Error</h2><p>We encountered an issue setting up the database. Please check <code>includes/db_error.log</code> for details.</p>");
}
?>

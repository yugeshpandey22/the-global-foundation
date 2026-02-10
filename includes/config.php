<?php
// Define the base URL of the project
// Automatically detects if running on localhost or live server
if (!defined('BASE_URL')) {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    // Get the directory of the current script, removing backslashes for Windows
    $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    // Remove '/includes' if it's part of the path (since config is in includes)
    $base_path = str_replace('/includes', '', $script_dir);
    // Remove trailing slash if present
    $base_path = rtrim($base_path, '/');
    
    // If installed in root, base path is empty
    if ($base_path == '') {
        define('BASE_URL', "$protocol://$host");
    } else {
        define('BASE_URL', "$protocol://$host$base_path");
    }
}
?>

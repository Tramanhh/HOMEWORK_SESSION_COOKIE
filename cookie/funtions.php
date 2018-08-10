<?php
function get_current_url() {
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $home_url;
}

// Define constant
define("HOME_URL", "http://localhost:8080/php/cookie/");
define("HOME_URL_ADMIN", "http://localhost:8080/phptech/techmasterphp/techmasterphp/blog/admin/");
$home_dir_path = dirname(__FILE__);
define("HOME_DIR_PATH", $home_dir_path);

// Connect database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homework_8/9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
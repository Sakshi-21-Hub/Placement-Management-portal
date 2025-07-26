<?php


    $dbServername = "127.0.0.1:3306";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "placement";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
// Base path definition (ensure this is defined correctly in your application)
define('BASE_PATH', '/xampp/htdocs/Major_Project_B/admin/');

// Include the database class
require_once BASE_PATH . 'includes/MysqliDb.php';

// Database configuration constants
define('DB_HOST', "127.0.0.1:3306");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "placement");

/**
 * Returns an instance of the MysqliDb class.
 *
 * @return MysqliDb
 */
function getDbInstance() {
    return new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}

// Example usage:
$db = getDbInstance();


?>

<?php
// Template for db-config.php — copy this file to db-config.php and fill in real values.
// db-config.php itself is gitignored so real credentials never get committed.

if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // Local Laragon MySQL
    $DB_HOST = 'localhost';
    $DB_NAME = 'isb_publishers';
    $DB_USER = 'root';
    $DB_PASS = '';
} else {
    // Hostinger MySQL — fill these in with the values from hPanel > Databases
    $DB_HOST = 'localhost';
    $DB_NAME = 'your_hostinger_db_name';
    $DB_USER = 'your_hostinger_db_user';
    $DB_PASS = 'your_hostinger_db_password';
}

function get_db_connection() {
    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;

    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    if ($conn->connect_error) {
        error_log('Database connection failed: ' . $conn->connect_error);
        return null;
    }

    return $conn;
}

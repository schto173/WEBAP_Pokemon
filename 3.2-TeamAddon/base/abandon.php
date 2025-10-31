<?php

// Start or resume the session
session_start();

// Check if the user is logged in (adjust this based on your authentication system)
if (!isset($_SESSION['id'])) {
    http_response_code(401); // Unauthorized
    echo "User not authenticated.";
    exit;
}



// Include database connection details
require_once("db_credentials.php");

// Create a new MySQLi connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);
// Check if the connection was successful
if ($mysqli->connect_error) {
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Database connection error."));
    exit;
}

// TODO:
// Check if the User is allowed to remove this pokemon i.e. if this Pokemon belongs to them and
// then remove it.


// Close the database connection
$mysqli->close();
?>
<?php

// DO NOT MODIFY!
// Start or resume the session
session_start();

// Check if the user is logged in (adjust this based on your authentication system)
if (!isset($_SESSION['id'])) {
    http_response_code(401); // Unauthorized
    echo json_encode(array("message" => "User not authenticated."));
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

// Prepare an SQL SELECT statement to retrieve the trainer's Pokémon
$userID = $_SESSION['id']; // Assuming you store the trainer's ID in the session
$stmt = $mysqli->prepare("SELECT * FROM pokemon WHERE idTrainer = ?");
$stmt->bind_param("i", $userID);

// Execute the statement
if ($stmt->execute()) {
    $result = $stmt->get_result();
    
    // Fetch Pokémon data and store it in an array
    $pokemonData = array();
    while ($row = $result->fetch_assoc()) {
        $pokemonData[] = $row;
    }

    // Return the Pokémon data as JSON
    echo json_encode($pokemonData);
} else {
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Database query error."));
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>

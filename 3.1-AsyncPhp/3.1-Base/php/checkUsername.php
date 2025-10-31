<?php
// Include database connection details
require_once("db_credentials.php");

// Check if the POST parameter 'username' is set
if (isset($_POST['username'])) {
    // Retrieve the username from the POST data
    $username = $_POST['username'];

    // Create a new MySQLi connection
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);

    // Check if the connection was successful
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare an SQL SELECT statement to check if the username exists
   
    // Bind the parameter to the statement
    
    // Execute the statement
    
    // Store the result
      
    // Check if a row with the given username exists
      
    // Close the statement and database connection
  
} else {
   //Throw an Error message if the User has not supplied a username to be tested
}



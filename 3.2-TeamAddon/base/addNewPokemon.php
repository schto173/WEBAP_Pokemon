<?php
// DO NOT MODIFY
// Start or resume the session
session_start();

// Check if the user is logged in (adjust this based on your authentication system)
if (!isset($_SESSION['user'])) {
    http_response_code(401); // Unauthorized
    echo "User not authenticated.";
    exit;
}

// User's trainer ID (replace with the actual ID)
$idTrainer = $_SESSION['id'];

// Check if the poekon species was transmitted
if (!isset($_POST['species'])) {
    http_response_code(401); // Unauthorized
    echo "No Species specified";
    exit;
} else {
    $idSpecies = $_POST['species'];
}


// Check if the nickname for the new pokemon was transmitted
if (!isset($_POST['nickname'])) {
    http_response_code(401); // Unauthorized
    echo "No Nickname specified";
    exit;
} else {
    $nickname = $_POST['nickname'];
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



//check if user is authorized, meaning he has 0 Pokemon in the team currently!

// Query to count the number of Pokemon in the user's team
$query = "SELECT COUNT(*) as total FROM pokemon WHERE idTrainer = ?";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $idTrainer);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_assoc();

// Check if the user's team is empty
if ($data['total'] == 0) {


    $health = 100;     // Set initial health to 100
    $level = 1;        // Set initial level to 1
    $experience = 0;   // Set initial experience to 0

    // SQL query to insert a new Pokémon
    $sql = "INSERT INTO pokemon (idTrainer, idSpecies,nickname, health, level, experience)
            VALUES (?, ?, ?,?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        return "Prepare failed: " . $mysqli->error;
    }

    // Bind parameters and execute the query
    $stmt->bind_param("iisiii", $idTrainer, $idSpecies,$nickname, $health, $level, $experience);

    if ($stmt->execute() === true) {

        // Close the prepared statement (if needed)
        $stmt->close();
        $pokeID = $mysqli->insert_id;

        addMoves($idSpecies, $pokeID);

        return $pokeID;
    } else {
        return "Error: " . $stmt->error;
    }
} else {
    echo "Not authorized because your Team is not empty!"; // User's team is not empty
}

// Close the database connection
$stmt->close();
$mysqli->close();












function addMoves($idSpecies, $idPokemon)
{

    // Read and parse the pokedex data from pokedex.json
    $pokedexJson = file_get_contents('../assets/pokedata/pokedex.json');
    $pokedex = json_decode($pokedexJson, true);



    // Find the type of the target Pokemon
    $pokemonTypes = null;
    foreach ($pokedex as $pokemon) {
        if ($pokemon['id'] == $idSpecies) {
            $pokemonTypes = $pokemon['type'];
            break;
        }
    }

    if ($pokemonTypes !== null) {
        // Read and parse the moves from moves.json
        $movesJson = file_get_contents('../assets/pokedata/moves.json');
        $moves = json_decode($movesJson, true);

        // Create an array to store selected moves based on the type
        $selectedMoves = [];

        // Loop through the moves to find moves matching the type
        foreach ($moves as $move) {
            foreach ($pokemonTypes as $pokemonType) {
                if ($move['type'] === $pokemonType) {
                    $selectedMoves[] = $move;
                }
            }
        }

        // Shuffle the array of selected moves to make them random
        shuffle($selectedMoves);

        // Select the first 3 moves (or fewer if there are not enough available)
        $selectedMoves = array_slice($selectedMoves, 0, 3);
        // Create a new MySQLi connection
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);
        // Check if the connection was successful
        if ($mysqli->connect_error) {
            http_response_code(500); // Internal Server Error
            echo json_encode(array("message" => "Database connection error."));
            exit;
        }

        // Prepare and execute SQL statements to insert moves into the database
        foreach ($selectedMoves as $move) {
            $sql = "INSERT INTO moves (idPokemon, idMove) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idPokemon, $move['id']);
            $stmt->execute();
            $stmt->close();
        }

        // Close the database connection
        $mysqli->close();
    } else {
        echo "Pokemon type not found for the specified ID.";
    }
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Basics</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.cdnfonts.com/css/g-guarantee" rel="stylesheet">
    <!-- import jquery Library -->
    <script type="text/javascript" src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/code.jquery.com_ui_1.13.2_jquery-ui.js"></script>
</head>

<body>
    <header>
        <img class="logo" src="img/logo.png" alt="Pokémon">
        <h1>3. Ajax dynamic content Exercises</h1>
    </header>
    <?php
    session_start();
    if ($_SESSION['id'] === 0) {
        header("Location: index.php");
    }
    ?>
    <nav hidden>
        <ul>
            <li><a id="logout" href="#">Logout</a></li>
            <li><a href="team.php">My Team</a></li>
            <li><a href="explore.php">Explore</a></li>
            <li><a href="arena.php">Arena</a></li>
            <li><a href="pokedex.php">Pokedex</a></li>
        </ul>
    </nav>
    <main hidden>
        <h2>Exercise 2: Loading Items from a database</h2>
        <h3>My Team</h3>
        <id  id="pokemonDataDiv" class="flexed"></id>
        
    
        <script>
         //Exercise 1 Instructions
         // Keep your exsisting scripts!
         // 1. Add to each Team member the option to abandon it meaning a Button.
         // give this button class btnAttack abandon
         // give this button the pokemonId of this pokemon.
         // 2. If clicked call the backend script and transmit the necessary paramters.
         // Oups! The Backend Script is incomplete... ;) 
         // When done loading abandoning, reload the list of pokemon, but not the entire page!
         // 3. Add a condition to loadPokemonData that checks if the received array is empty.
         // In this case we must forward the user to the page start.php where they can select a new starter Pokemon!
      
            
        </script>
    </main>
</body>

</html>
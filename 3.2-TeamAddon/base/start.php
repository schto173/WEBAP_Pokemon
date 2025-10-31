<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Basics</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.cdnfonts.com/css/g-guarantee" rel="stylesheet">
    <!-- import jquery library -->
    <script type="text/javascript" src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/code.jquery.com_ui_1.13.2_jquery-ui.js"></script>
    <!-- import start.js script -->
    <!-- Write all JS code in this file from now on to keep HTML clean! -->
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
 
    <main>
        <h1>Starting companions:</h1>
        <div class="slectors">
            <button type="button" pokeID="1" class="startpoke shine"><img  src="img/pokemon/bulbasaur.png" alt="bulbasaur" ></button>
            <button type="button" pokeID="4" class="startpoke shine"><img  src="img/pokemon/charmander.png" alt="charmander"></button>
            <button type="button" pokeID="7" class="startpoke shine"><img  src="img/pokemon/squirtle.png" alt="squirtle"></button>
        </div>
        <div class="startinfo"></div>
        </main>
</body>
</html>
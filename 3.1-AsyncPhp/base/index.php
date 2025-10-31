<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Basics</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.cdnfonts.com/css/g-guarantee" rel="stylesheet">
    <!-- import jquery Library -->
    <!-- import jquery UI Library -->
</head>

<body>
    <header>
        <img class="logo" src="img/logo.png" alt="Pokémon">
        <h1>3. Ajax dynamic content Exercises</h1>
    </header>
    <?php
    // Start the session and check if the field "id" is set.
    // It should contain the trainerId from the database.
    // If the user is already logged in, lead them to the page "team.php"

    ?>
    <main>
        <h2>Exercise 1: Loading Php Sources asyncronously</h2>
        <h3>Login</h3>
        <form id="login">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <p id="Warn" class="warning"></p>

            <input type="submit" value="Login">
        </form>
        <p>I don't have an account:
            <a href="register.html"><button>Register</button></a>
        </p>

        <script>
            // Exercise 2 Instructions:
            // The User provides their credentials.
            // Prevent the default behaviour of the form with js.
            // Handle the form submit with jquery
            // Send the login data asynchronously to the server script for checking. 
            // If the login was successfull send the User to the team page.
            // If the username or password was incorrect, notify the user in the Warn field.
            // This can be achieved with .done and .fail
            // This warning should also use the shake effect. Set the parameters for this effect.
            // Do not reload the page for this warning!
            // Extra: Upon successfull login, fadeOut the main part and set the login menu to show logout instead.
        </script>
    </main>
</body>

</html>
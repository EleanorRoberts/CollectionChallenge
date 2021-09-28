<?php
require_once 'collectionfunctions.php';
$db = connectToDB('pokemon');
$pokemon = collectData($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Pokemon Collection</title>
    <?php echo addStyle(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<h1>Pokemonz</h1>
<section class="pokeCards">
    <?php
    echo displayPoke($pokemon);
    ?>
</section>
<section>
    <a href="addpokemon.php" class="addPoke">Add New Pokemon</a>
</section>
<footer class="footer">
    <p>Nova Inc. Ltd</p>
</footer>
</body>
</html>

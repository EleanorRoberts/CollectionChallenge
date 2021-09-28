<?php
require_once "collectionfunctions.php";
require_once "collectiondb.php";
$pokemon = collectData($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Pokemon Collection</title>
    <?php addStyle(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<h1>Pokemonz</h1>
<section class="pokeCards">
    <?php
    echo displayPoke($pokemon);
    ?>
</section>
<a href="addpokemon.php">Add New Pokemon</a>
</body>
</html>

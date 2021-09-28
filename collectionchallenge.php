<?php
require_once "collectionfunctions.php";
require_once "collectiondb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Pokemon Collection</title>

    <link rel="stylesheet" href="normalize.css" />
    <!--	<link rel="stylesheet" href="xxx.css" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
<h1>Pokemonz</h1>
<?php
echo displayPoke($pokemon);
?>
<a href="addpokemon.php">Add New Pokemon</a>
</body>
</html>
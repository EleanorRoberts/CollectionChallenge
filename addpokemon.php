<?php
require_once 'collectionfunctions.php';
$db = connectToDB('pokemon');
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
<h1>Add Pokemonz</h1>
<form method="post">
    <label for="name">Name <input type="text" name="name" required /></label>
    <label for="type1">First Type <input type="text" name="type1" required/></label>
    <label for="type2">Second Type <input type="text" name="type2"/></label>
    <label for="hp">HP <input type="number" name="hp" required/></label>
    <label for="attack">Attack <input type="number" name="attack" required /></label>
    <label for="defense">Defense <input type="number" name="defense" required /></label>
    <label for="spAttack">Sp. Attack <input type="number" name="spAttack" required /></label>
    <label for="spDefense">Sp. Defense <input type="number" name="spDefense" required/></label>
    <label for="speed">Speed <input type="number" name="speed" required/></label>
    <input type="submit" name="submit" />
    <?php checkNew($db);
    ?>
</form>
</body>
</html>

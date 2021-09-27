<?php
require_once 'collectiondb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Pokemon Collection</title>

<!--	<link rel="stylesheet" href="normalize.css" />-->
<!--	<link rel="stylesheet" href="xxx.css" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
<h1>Add Pokemonz</h1>
<form>
    <label for="name">Name <input type="text" name="name"/></label>
    <label for="type1">First Type <input type="text" name="type1"/></label>
    <label for="type2">Second Type <input type="text" name="type2"/></label>
    <label for="hp">HP <input type="text" name="hp"/></label>
    <label for="attack">Attack <input type="text" name="attack"/></label>
    <label for="defense">Defense <input type="text" name="defense"/></label>
    <label for="spAttack">Sp. Attack <input type="text" name="spAttack"/></label>
    <label for="spDefense">Sp. Defense <input type="text" name="spDefense"/></label>
    <label for="speed">Speed <input type="text" name="speed"/></label>
    <input type="submit" />
</form>
</body>
</html>


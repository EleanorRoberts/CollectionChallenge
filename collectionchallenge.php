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
<h1>Pokemonz</h1>
<?php
foreach ($pokemon as $poke) {
    echo "<div>";
    echo "<h2>{$poke['name']}</h2>";
    if ($poke['type2'] == 'N/A') {
        echo "<p>{$poke['type1']}</p>";
    } else {
        echo "<p>{$poke['type1']}" . " & " . "{$poke['type2']}</p>";
    }
    echo "<ul>";
    echo "<li>HP: {$poke['hp']}</li>";
    echo "<li>Attack: {$poke['attack']}</li>";
    echo "<li>Defense: {$poke['defense']}</li>";
    echo "<li>SP. Attack: {$poke['spAttack']}</li>";
    echo "<li>SP. Defense: {$poke['spDefense']}</li>";
    echo "<li>Speed: {$poke['speed']}</li>";
    echo "</div>";
}

?>
<a href="addpokemon.php">Add New Pokemon</a>
</body>
</html>
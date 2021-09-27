<?php

$db = new PDO('mysql:host=db; dbname=pokemon', 'root', 'password' );
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;");
$query->execute();
$pokemon = $query->fetchAll();

echo '<pre>';
var_dump($pokemon);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Pokemon Collection</title>

<!--	<link rel="stylesheet" href="normalize.css" />-->
<!--	<link rel="stylesheet" href="xxx.css" />-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->

</head>
<body>
<h1>Pokemonz</h1>

<?php
foreach ($pokemon as $poke) {
    echo "<div>";
    echo "<h2>{$poke['name']}</h2>";
    echo "<p>{$poke['type1']}" . " & " . "{$poke['type2']}</p>";
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

</body>
</html>
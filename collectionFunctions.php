<?php

/** Displays each pokemon and stats
 * @param array $pokemon
 * @return String
 */
function displayPoke(Array $pokemon): String {
    $output = "";
    foreach ($pokemon as $poke) {
        $output .= "<div class='pokeCard'>";
        $output .= "<h2>{$poke['name']}</h2>";
        if ($poke["type2"] === "") {
            $output .= "<p>{$poke['type1']}</p>";
        } else {
            $output .= "<p>{$poke['type1']}" . " & " . "{$poke['type2']}</p>";
        }
        $output .= '<ul>';
        $output .= "<li>HP: {$poke['hp']}</li>";
        $output .= "<li>Attack: {$poke['attack']}</li>";
        $output .= "<li>Defense: {$poke['defense']}</li>";
        $output .= "<li>Sp. Attack: {$poke['spAttack']}</li>";
        $output .= "<li>Sp. Defense: {$poke['spDefense']}</li>";
        $output .= "<li>Speed: {$poke['speed']}</li>";
        $output .= '</div>';
    }
    return $output;
}

/** Connects to a database, determined by db name
 * @param String $database
 * @return PDO
 */
function connectToDB(String $database): PDO {
    $dbConnection = new PDO("mysql:host=db; dbname={$database}", 'root', 'password' );
    $dbConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $dbConnection;
}

/** Collects all pokemon values from pokemon database
 * @param PDO $database
 * @return array
 */
function collectData(PDO $database): Array {
    $getPokemon = $database->prepare('SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;');
    $getPokemon->execute();
    return $getPokemon->fetchAll();
}

/** Connects file to all related style sheets
 *
 */
function addStyle() {
    echo "<link rel='preconnect' href='https://fonts.googleapis.com' />";
    echo "<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />";
    echo "<link href='https://fonts.googleapis.com/css2?family=Nunito&display=swap' rel='stylesheet' />";
    echo "<link rel='stylesheet' href='normalize.css' />";
    echo "<link rel='stylesheet' href='collectionstyle.css' />";
}

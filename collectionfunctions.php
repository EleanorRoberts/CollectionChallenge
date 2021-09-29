<?php

/** Displays each Pokémon and stats
 * @param array $pokemon
 * @return String
 */
function displayPoke(Array $pokemon): String {
    $output = "";
    foreach ($pokemon as $poke) {
        $output .= "<div class='pokeCard'";
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
        $output .= "<li class='speed'>Speed: {$poke['speed']}</li>";
        $output .= "<a href='editpokemon.php?id={$poke['id']}' class='edit'>Edit</a>";
        $output .= "<a href='#' class='delete'>Delete</a>";
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

/** Collects all Pokémon values from Pokémon database
 * @param PDO $database
 * @return array
 */
function collectData(PDO $database): Array {
    $getPokemon = $database->prepare('SELECT `stats`.`id`, `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;');
    $getPokemon->execute();
    return $getPokemon->fetchAll();
}

/** Collects data for Pokémon matching id
 * @param PDO $database
 * @return array
 */
function getPoke(PDO $database): Array {
    $getPokemon = $database->prepare("SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats` WHERE `id` = '{$_GET['id']}';");
    $getPokemon->execute();
    return $getPokemon->fetch();
}

/** Links page to style sheets
 * @return String
 */
function addStyle(): String {
    $input = '';
    $input .= "<link rel='preconnect' href='https://fonts.googleapis.com' />";
    $input .= "<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />";
    $input .= "<link href='https://fonts.googleapis.com/css2?family=Nunito&display=swap' rel='stylesheet' />";
    $input .= "<link rel='stylesheet' href='normalize.css' />";
    $input .= "<link rel='stylesheet' href='collectionstyle.css' />";
    return $input;
}

/** Checks to see if a new Pokémon is being added
 * @param PDO $database
 */
function checkNew(PDO $database) {
    if (isset($_POST['name'], $_POST['type1'], $_POST['hp'], $_POST['attack'], $_POST['defense'], $_POST['spAttack'], $_POST['spDefense'], $_POST['speed'])) {
        if (is_numeric($_POST['hp'] . $_POST['attack'] . $_POST['defense'] . $_POST['spAttack'] . $_POST['spDefense'] . $_POST['speed'])) {
            $insertNewPokemon = $database->prepare('INSERT INTO `stats` (`name`,`type1`,`type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`) VALUES (:name, :type1, :type2, :hp, :attack, :defense, :spAttack, :spDefense, :speed);');
            $ifExecute = $insertNewPokemon->execute([
                ':name' => $_POST['name'],
                ':type1' => $_POST['type1'],
                ':type2' => $_POST['type2'],
                ':hp' => $_POST['hp'],
                ':attack' => $_POST['attack'],
                ':defense' => $_POST['defense'],
                ':spAttack' => $_POST['spAttack'],
                ':spDefense' => $_POST['spDefense'],
                ':speed' => $_POST['speed']
            ]);
            if ($ifExecute) {
                header('Location: collectionchallenge.php');
            }
        } else {
            echo "<div class='error'>Unable to add Pokémon to the collection</div>";
        }
    }
}

function editPoke(PDO $database) {
    if (isset($_POST['name'], $_POST['type1'], $_POST['hp'], $_POST['attack'], $_POST['defense'], $_POST['spAttack'], $_POST['spDefense'], $_POST['speed'])) {
        if (is_numeric($_POST['hp'] . $_POST['attack'] . $_POST['defense'] . $_POST['spAttack'] . $_POST['spDefense'] . $_POST['speed'])) {
            $editPokemon = $database->prepare("UPDATE `stats` SET `name` = :name, `type1` = :type1, `type2` = :type2, `hp` = :hp, `attack` = :attack, `defense` = :defense, `spAttack` = :spAttack, `spDefense` = :spDefense, `speed` = :speed WHERE `id` = :id LIMIT 1;");
            $ifExecute = $editPokemon->execute([
                ':id' => $_GET['id'],
                ':name' => $_POST['name'],
                ':type1' => $_POST['type1'],
                ':type2' => $_POST['type2'],
                ':hp' => $_POST['hp'],
                ':attack' => $_POST['attack'],
                ':defense' => $_POST['defense'],
                ':spAttack' => $_POST['spAttack'],
                ':spDefense' => $_POST['spDefense'],
                ':speed' => $_POST['speed']
            ]);
            if ($ifExecute) {
                header('Location: collectionchallenge.php');
            } else {
                echo "<div class='error'>Unable to edit Pokémon in the collection</div>";
            }
        }
    }
}

function deletePoke() {
    ///delete poke
}

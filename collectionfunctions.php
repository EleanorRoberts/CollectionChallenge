<?php

/** Displays each Pokémon and stats
 * @param array $pokemon
 * @return String
 */
function displayPoke(Array $pokemon): String {
    $output = "";
    foreach ($pokemon as $poke) {
        $output .= "<div class='pokeCard'>";
        $output .= "<h2>{$poke['name']}</h2>";
        if ($poke["type2"] == "") {
            $output .= "<p class='type {$poke['type1']}'>{$poke['type1']}</p>";
        } else {
            $output .= "<p class='type {$poke['type1']}{$poke['type2']}'>{$poke['type1']}" . " & " . "{$poke['type2']}</p>";
        }
        $output .= '<table>';
        $output .= '<tr><th>Stat</th><th>Value</th></tr>';
        $output .= "<tr><td>HP: </td><td>{$poke['hp']}</td></tr>";
        $output .= "<tr><td>Attack: </td><td>{$poke['attack']}</td></tr>";
        $output .= "<tr><td>Defense: </td><td>{$poke['defense']}</td></tr>";
        $output .= "<tr><td>Sp. Attack: </td><td>{$poke['spAttack']}</td></tr>";
        $output .= "<tr><td>Sp. Defense: </td><td>{$poke['spDefense']}</td></tr>";
        $output .= "<tr><td>Speed: </td><td>{$poke['speed']}</td></tr></table>";
        $output .= "<a href='editpokemon.php?id={$poke['id']}' class='edit'>Edit</a>";
        $output .= "<a href='deletePokemon.php?id={$poke['id']}' class='delete'>Delete</a>";
        $output .= '</div>';
    }
    return $output;
}

/** Connects to a database, determined by db name
 * @param String $database
 * @return PDO
 */
function connectToDB(String $database): PDO {
    $dbConnection = new PDO("mysql:host=db; dbname=$database", 'root', 'password' );
    $dbConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $dbConnection;
}

/** Collects all Pokémon values from Pokémon database
 * @param PDO $database
 * @return array
 */
function getPokes(PDO $database): Array {
    $getPokemon = $database->prepare("SELECT `stats`.`id`, `stats`.`name`, `ty`.`type` AS `type1`, `ty2`.`type` AS `type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats` LEFT JOIN `types` `ty` ON `stats`.`type1` = `ty`.`id` LEFT JOIN `types` `ty2` ON `stats`.`type2` = `ty2`.`id` WHERE `stats`.`deleted` = 0;");
    $getPokemon->execute();
    return $getPokemon->fetchAll();
}

/** Collects data for Pokémon matching id
 * @param PDO $database
 * @return array
 */
function getPoke(PDO $database): Array {
    $getPoke = $database->prepare("SELECT `stats`.`name`, `ty`.`type` AS `type1`, `ty2`.`type` AS `type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats` LEFT JOIN `types` `ty` ON `stats`.`type1` = `ty`.`id` LEFT JOIN `types` `ty2` ON `stats`.`type2` = `ty2`.`id` WHERE `stats`.`id` = :id AND `deleted` = 0;");
    $getPoke->execute(['id' => $_GET['id']]);
    return $getPoke->fetch();
}

/** Links page to style sheets
 * @return String
 */
function addStyle(): String {
    $input = "<link rel='preconnect' href='https://fonts.googleapis.com' />";
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
    if (checkPost()) {
        if (checkNum()) {
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
                header('Location: index.php');
            }
        } else {
            echo "<div class='error'>Unable to add Pokémon to the collection</div>";
        }
    }
}

/** Checks to see if $_POST values are numeric (where applicable)
 * @return bool
 */
function checkNum(): Bool {
    return is_numeric($_POST['hp'] . $_POST['attack'] . $_POST['defense'] . $_POST['spAttack'] . $_POST['spDefense'] . $_POST['speed']);

}

/** Checks to see if relevant fields in post are set
 * @return bool
 */
function checkPost(): Bool {
    return isset($_POST['name'], $_POST['type1'], $_POST['hp'], $_POST['attack'], $_POST['defense'], $_POST['spAttack'], $_POST['spDefense'], $_POST['speed']);
}

/** updates Pokémon database if values are the correct type
 * @param PDO $database
 */
function editPoke(PDO $database) {
    if (checkPost()) {
        if (checkNum()) {
            $editPokemon = $database->prepare("UPDATE `stats` SET `name` = :name, `type1` = :type1, `type2` = :type2, `hp` = :hp, `attack` = :attack, `defense` = :defense, `spAttack` = :spAttack, `spDefense` = :spDefense, `speed` = :speed WHERE `id` = :id LIMIT 1;");
            $ifExecute = $editPokemon->execute([
                ':id' => $_GET['id'],
                ':name' => $_POST['name'],
                ':type1' => $_POST['type1'],
//                ':type1' => $_POST['type1'],
                ':type2' => $_POST['type2'],
//                ':type2' => $_POST['type2'],
                ':hp' => $_POST['hp'],
                ':attack' => $_POST['attack'],
                ':defense' => $_POST['defense'],
                ':spAttack' => $_POST['spAttack'],
                ':spDefense' => $_POST['spDefense'],
                ':speed' => $_POST['speed']
            ]);
            if ($ifExecute) {
                header('Location: index.php');
            }
        } echo "<div class='error'>Unable to edit Pokémon in the collection</div>";
    }
}

/** Soft delete Pokémon record and refresh page to show undeleted Pokémon
 * @param PDO $database
 */
function deletePoke(PDO $database) {
    if (isset($_GET['id'])) {
        $deletePokemon = $database->prepare('UPDATE `stats` SET `deleted` = 1 WHERE `id` = :id LIMIT 1;');
        $ifExecute = $deletePokemon->execute([':id' => $_GET['id']]);
        if ($ifExecute) {
            header('Location: index.php');
        } else {
            echo "<div class='error'>Unable to delete Pokémon from the collection</div>";
            echo "<a href='index.php'>Go Back</a>";
        }
    } else {
        header('Location: index.php');
    }
}

/** Fetches the list of Pokémon types from types array
 * @param PDO $database
 * @return array
 */
function getTypes(PDO $database): Array {
    $getType = $database->prepare('SELECT `id`, `type`, `colour` FROM `types`');
    $getType->execute();
    return $getType->fetchAll();
}

/** Creates a list from an array of types
 * @param array $typesArray
 * @return String
 */
function makeTypesList(Array $typesArray): String {
    $output = '';
    foreach ($typesArray as $type) {
        $output .= "<option value='{$type['id']}'>{$type['type']}</option>";
    }
    return $output;
}

function makeSingle($types) {
    $output = '';
    foreach ($types as $type) {
        $output .= ".{$type['type']} {background-color: {$type['colour']};}";
    }
    return $output;
}

function makeCouple($types1, $types2) {
    $output = '';
    foreach ($types1 as $type1) {
        foreach ($types2 as $type2)
            if ($type1 === $type2) {
                continue;
            } else {
                $output .= ".{$type1['type']}{$type2['type']} {background-image: linear-gradient(to right, {$type1['colour']}, {$type2['colour']});}";

            }
    }
    return $output;
}

<?php

if (isset($_POST["name"])) {
    $insertNewPokemon = $db->prepare("INSERT INTO `stats` (`name`,`type1`,`type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`) VALUES (:name, :type1, :type2, :hp, :attack, :defense, :spAttack, :spDefense, :speed);");
    $insertNewPokemon->execute([
        ":name" => $_POST["name"],
        ":type1" => $_POST["type1"],
        ":type2" => $_POST["type2"],
        ":hp" => $_POST["hp"],
        ":attack" => $_POST["attack"],
        ":defense" => $_POST["defense"],
        ":spAttack" => $_POST["spAttack"],
        ":spDefense" => $_POST["spDefense"],
        ":speed" => $_POST["speed"]
    ]);
    header("Location: collectionchallenge.php");
}

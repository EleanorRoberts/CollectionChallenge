<?php

if (isset($_POST['name'] && $_POST['type1'] && $_POST['hp'] && $_POST['attack'] && $_POST['defense'] && $_POST['spAttack'] && $_POST['spDefense'] && $_POST['speed'])) {
    $insertNewPokemon = $db->prepare('INSERT INTO `stats` (`name`,`type1`,`type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`) VALUES (:name, :type1, :type2, :hp, :attack, :defense, :spAttack, :spDefense, :speed);');
    $insertNewPokemon->execute([
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
    if ($insertNewPokemon->execute()) {
        header('Location: collectionchallenge.php');
    } else {
        echo "Unable to add Pokemon to the collection";
    }
}

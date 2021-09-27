<?php

$db = new PDO('mysql:host=db; dbname=pokemon', 'root', 'password' );
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$getPokemon = $db->prepare("SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;");
$getPokemon->execute();
$pokemon = $getPokemon->fetchAll();


if (isset($_POST['name'])) {
    $insertNewPokemon = $db->prepare("INSERT INTO `stats` (`name`,`type1`,`type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`) VALUES (:name, :type1, :type2, :hp, :attack, :defense, :spAttack, :spDefense, :speed);");
    $insertNewPokemon->bindParam(':name', $_POST['name']);
    $insertNewPokemon->bindParam(':type1', $_POST['type1']);
    $insertNewPokemon->bindParam(':type2', $_POST['type2']);
    $insertNewPokemon->bindParam(':hp', $_POST['hp']);
    $insertNewPokemon->bindParam(':attack', $_POST['attack']);
    $insertNewPokemon->bindParam(':defense', $_POST['defense']);
    $insertNewPokemon->bindParam(':spAttack', $_POST['spAttack']);
    $insertNewPokemon->bindParam(':spDefense', $_POST['spDefense']);
    $insertNewPokemon->bindParam(':speed', $_POST['speed']);
    $insertNewPokemon->execute();
    header("Location: collectionchallenge.php");
}
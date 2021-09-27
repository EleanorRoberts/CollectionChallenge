<?php

$db = new PDO('mysql:host=db; dbname=pokemon', 'root', 'password' );
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$getPokemon = $db->prepare("SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;");
$getPokemon->execute();
$pokemon = $getPokemon->fetchAll();


if (isset($_POST['name'])) {
    $insertNewPokemon = $db->prepare("INSERT INTO `stats` (`name`,`type1`,`type2`, `hp`, `attack`, `defense`, `spAttack`, `spDefense`, `speed`) VALUES (`{$_POST['name']}`, `{$_POST['type1']}`, `{$_POST['type2']}`, `{$_POST['hp']}`, `{$_POST['attack']}`, `{$_POST['defense']}`, `{$_POST['spAttack']}`, `{$_POST['spDefense']}`, `{$_POST['speed']}`);");
    $insertNewPokemon->execute();
}
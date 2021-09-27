<?php

$db = new PDO('mysql:host=db; dbname=pokemon', 'root', 'password' );
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$getpokemon = $db->prepare("SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;");
$getpokemon->execute();
$pokemon = $getpokemon->fetchAll();
<?php
require_once 'collectionfunctions.php';
$db = connectToDB('pokemonOld');
deletePoke($db);
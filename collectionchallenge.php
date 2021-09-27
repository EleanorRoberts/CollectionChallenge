<?php

$db = new PDO('mysql:host=db; dbname=pokemon', 'root', 'password' );
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `stats`.`name`, `stats`.`type1`, `stats`.`type2`, `stats`.`hp`, `stats`.`attack`, `stats`.`defense`, `stats`.`spAttack`, `stats`.`spDefense`, `stats`.`speed` FROM `stats`;");
$query->execute();
$result = $query->fetchAll();

var_dump($result);
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

</body>
</html>
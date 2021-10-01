<?php
require_once 'collectionfunctions.php';
$db = connectToDB('pokemonOld');
$poke = getPoke($db);
editPoke($db);
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit a Pokemon</title>
    <?php echo addStyle(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<section>
    <h1>Edit Your Pokemonz</h1>
    <form method="post">
        <label for="name">Name
            <input type="text" name="name" value="<?php echo $poke['name'] ?>" required /></label>
        <label for="type1">First Type
            <input type="text" name="type1" value="<?php echo $poke['type1'] ?>" required/></label>
        <label for="type2">Second Type
            <input type="text" name="type2" value="<?php echo $poke['type2'] ?>"/></label>
        <label for="hp">HP
            <input type="number" name="hp" value="<?php echo $poke['hp'] ?>" required/></label>
        <label for="attack">Attack
            <input type="number" name="attack" value="<?php echo $poke['attack'] ?>" required /></label>
        <label for="defense">Defense
            <input type="number" name="defense" value="<?php echo $poke['defense'] ?>" required /></label>
        <label for="spAttack">Sp. Attack
            <input type="number" name="spAttack" value="<?php echo $poke['spAttack'] ?>" required /></label>
        <label for="spDefense">Sp. Defense
            <input type="number" name="spDefense" value="<?php echo $poke['spDefense'] ?>" required/></label>
        <label for="speed">Speed
            <input type="number" name="speed" value="<?php echo $poke['speed'] ?>" required/></label>
        <input type="submit" name="submit" />
    </form>
</section>
<footer class="footer">
    <p>Nova Inc. Ltd</p>
</footer>
</body>
</html>

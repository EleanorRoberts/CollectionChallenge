<?php

function displayPoke($pokemon) {
    foreach ($pokemon as $poke) {
        echo "<div>";
        echo "<h2>{$poke['name']}</h2>";
        if ($poke['type2'] === "") {
            echo "<p>{$poke['type1']}</p>";
        } else {
            echo "<p>{$poke['type1']}" . " & " . "{$poke['type2']}</p>";
        }
        echo "<ul>";
        echo "<li>HP: {$poke['hp']}</li>";
        echo "<li>Attack: {$poke['attack']}</li>";
        echo "<li>Defense: {$poke['defense']}</li>";
        echo "<li>SP. Attack: {$poke['spAttack']}</li>";
        echo "<li>SP. Defense: {$poke['spDefense']}</li>";
        echo "<li>Speed: {$poke['speed']}</li>";
        echo "</div>";
    }
}

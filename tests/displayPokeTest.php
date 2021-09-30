<?php
require_once "../collectionfunctions.php";

use PHPUnit\Framework\TestCase;

class displayPokeTest extends TestCase
{
    public function testSuccessDisplayPokeOneType()
    {
        $expected = "<div class='pokeCard'><h2>Nova</h2><p class='type'>Cutie</p><table><tr><th>Stat</th><th>Value</th></tr><tr><td>HP: </td><td>1</td></tr><tr><td>Attack: </td><td>2</td></tr><tr><td>Defense: </td><td>3</td></tr><tr><td>Sp. Attack: </td><td>4</td></tr><tr><td>Sp. Defense: </td><td>5</td></tr><tr><td>Speed: </td><td>6</td></tr></table><a href='editpokemon.php?id=12' class='edit'>Edit</a><a href='deletePokemon.php?id=12' class='delete'>Delete</a></div>";

        $input[0] = [
            "id" => "12",
            "name" => "Nova",
            "type1" => "Cutie",
            "type2" => "",
            "hp" => 1,
            "attack" => 2,
            "defense" => 3,
            "spAttack" => 4,
            "spDefense" => 5,
            "speed" => 6
        ];

        $case = displayPoke($input);

        $this->assertEquals($expected, $case);
    }

    public function testSuccessDisplayPokeTwoTypes()
    {
        $expected = "<div class='pokeCard'><h2>Nova</h2><p class='type'>Cutie & Pie</p><table><tr><th>Stat</th><th>Value</th></tr><tr><td>HP: </td><td>1</td></tr><tr><td>Attack: </td><td>2</td></tr><tr><td>Defense: </td><td>3</td></tr><tr><td>Sp. Attack: </td><td>4</td></tr><tr><td>Sp. Defense: </td><td>5</td></tr><tr><td>Speed: </td><td>6</td></tr></table><a href='editpokemon.php?id=12' class='edit'>Edit</a><a href='deletePokemon.php?id=12' class='delete'>Delete</a></div>";

        $input[0] = [
            "id" => "12",
            "name" => "Nova",
            "type1" => "Cutie",
            "type2" => "Pie",
            "hp" => 1,
            "attack" => 2,
            "defense" => 3,
            "spAttack" => 4,
            "spDefense" => 5,
            "speed" => 6
        ];

        $case = displayPoke($input);

        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayPokemon() {
        $input = "No one likes a string";

        $this->expectException(TypeError::class);

        $case = displayPoke($input);
    }
}

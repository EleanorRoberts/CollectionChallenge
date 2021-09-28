<?php
require_once "../collectionfunctions.php";

use PHPUnit\Framework\TestCase;

class displayPokeTest extends TestCase
{
    public function testSuccessDisplayPokeOneType()
    {
        $expected = "<div><h2>Nova</h2><p>Cutie</p><ul><li>HP: 1</li><li>Attack: 2</li><li>Defense: 3</li><li>Sp. Attack: 4</li><li>Sp. Defense: 5</li><li>Speed: 6</li></div>";

        $input[0] = [
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
        $expected = "<div><h2>Nova</h2><p>Cutie & Pie</p><ul><li>HP: 1</li><li>Attack: 2</li><li>Defense: 3</li><li>Sp. Attack: 4</li><li>Sp. Defense: 5</li><li>Speed: 6</li></div>";

        $input[0] = [
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

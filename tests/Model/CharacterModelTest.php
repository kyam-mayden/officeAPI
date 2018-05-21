<?php

namespace Tests\Model;
use PHPUnit\Framework\TestCase;
use Portal\Model\CharacterModel;
use PDO;


class CharacterModelTest extends TestCase
{
    function testConstruct()
    {
        $db = $this->createMock(PDO::class);
        $case = new CharacterModel($db);
        $expected = CharacterModel::class;

        $this->assertInstanceOf($expected, $case);
    }

    function testgetQuotesByCharacter(){
        //cannot test as interacts with DB
    }
}
<?php


namespace Tests\Controller;
use PHPUnit\Framework\TestCase;
use Portal\Controller\QuotesByCharacterController;
use Portal\Model\CharacterModel;


class QuotesByCharacterControllerTest extends TestCase
{
    function testConstruct()
    {
        $stub = $this->createMock(CharacterModel::class);
        $case = new QuotesByCharacterController($stub);
        $expected = QuotesByCharacterController::class;
        $this->assertInstanceOf($expected, $case);
    }

    function testInvoke(){
        //cannot test as gets data from database
    }
}
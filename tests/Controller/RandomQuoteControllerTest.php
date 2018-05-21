<?php

namespace Tests\Controller;
use PHPUnit\Framework\TestCase;
use API\Controller\RandomQuoteController;
use API\Model\QuoteModel;

class RandomQuoteControllerTest extends TestCase
{
    function testConstruct()
    {
        $stub = $this->createMock(QuoteModel::class);
        $case = new RandomQuoteController($stub);
        $expected = RandomQuoteController::class;
        $this->assertInstanceOf($expected, $case);
    }

    function testInvoke(){
        //cannot test as gets data from database
    }
}
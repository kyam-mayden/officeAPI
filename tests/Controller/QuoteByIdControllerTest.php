<?php

namespace Tests\Controller;
use PHPUnit\Framework\TestCase;
use API\Controller\QuoteByIdController;
use API\Model\QuoteModel;

class QuoteByIdControllerTest extends TestCase
{
    function testConstruct()
    {
        $stub = $this->createMock(QuoteModel::class);
        $case = new QuoteByIdController($stub);
        $expected = QuoteByIdController::class;
        $this->assertInstanceOf($expected, $case);
    }

    function testInvoke(){
        //cannot test as gets data from database
    }
}
<?php

namespace Tests\Controller;
use PHPUnit\Framework\TestCase;
use Portal\Controller\QuoteByIdController;
use Portal\Model\QuoteModel;

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
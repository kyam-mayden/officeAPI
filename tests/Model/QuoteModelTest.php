<?php


namespace Tests\Model;
use PHPUnit\Framework\TestCase;
use Portal\Model\QuoteModel;


class QuoteModelTest extends TestCase
{
    function testConstruct()
    {
        $db = $this->createMock(\PDO::class);
        $case = new QuoteModel($db);
        $expected = QuoteModel::class;

        $this->assertInstanceOf($expected, $case);
    }

    function testSuccessGetRandomQuote(){
        //cannot test as interacts with database
    }
}
<?php

namespace Tests\Factory;
use PHPUnit\Framework\TestCase;
use Portal\Factory\QuoteModelFactory;
use Portal\Model\QuoteModel;
use Psr\Container\ContainerInterface;


class QuoteModelFactoryTest extends Testcase
{
    function testInvoke()
    {
        $db = $this->createMock(\PDO::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')
            ->willReturn($db);

        $factory = new QuoteModelFactory;
        $case = $factory($container);
        $expected = QuoteModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}
<?php

namespace Tests\Factory;
use Portal\Factory\QuoteModelFactory;
use Portal\Model\QuoteModel;
use Psr\Container\ContainerInterface;


class QuoteModelFactoryTest
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
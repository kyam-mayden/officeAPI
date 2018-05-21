<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use API\Factory\QuoteByIdControllerFactory;
use API\Controller\QuoteByIdController;
use API\Model\QuoteModel;
use Psr\Container\ContainerInterface;

class QuotesByIdControllerFactoryTest extends TestCase
{
    function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $quote = $this->createMock(QuoteModel::class);
        $container->method('get')
            ->willReturn($quote);

        $factory = new QuoteByIdControllerFactory;
        $case = $factory($container);
        $expected = QuoteByIdController::class;
        $this->assertInstanceOf($expected, $case);
    }

}
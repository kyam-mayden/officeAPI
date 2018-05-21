<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use API\Factory\RandomQuoteControllerFactory;
use API\Controller\RandomQuoteController;
use API\Model\QuoteModel;
use Psr\Container\ContainerInterface;

class RandomQuoteControllerFactoryTest extends TestCase
{
    function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $quote = $this->createMock(QuoteModel::class);
        $container->method('get')
            ->willReturn($quote);

        $factory = new RandomQuoteControllerFactory;
        $case = $factory($container);
        $expected = RandomQuoteController::class;
        $this->assertInstanceOf($expected, $case);
    }

}
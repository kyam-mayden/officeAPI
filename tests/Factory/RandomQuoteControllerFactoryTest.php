<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use Portal\Factory\RandomQuoteControllerFactory;
use Portal\Controller\RandomQuoteController;
use Portal\Model\QuoteModel;
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
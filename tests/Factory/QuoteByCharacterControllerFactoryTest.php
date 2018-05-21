<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use API\Factory\QuotesByCharacterControllerFactory;
use API\Controller\QuotesByCharacterController;
use API\Model\CharacterModel;
use Psr\Container\ContainerInterface;


class QuoteByCharacterControllerFactoryTest extends TestCase
{
    function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $character = $this->createMock(CharacterModel::class);
        $container->method('get')
            ->willReturn($character);

        $factory = new QuotesByCharacterControllerFactory;
        $case = $factory($container);
        $expected = QuotesByCharacterController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use Portal\Factory\QuotesByCharacterControllerFactory;
use Portal\Controller\QuotesByCharacterController;
use Portal\Model\CharacterModel;
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
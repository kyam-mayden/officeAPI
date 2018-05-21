<?php


namespace Tests\Factory;
use PHPUnit\Framework\TestCase;
use Portal\Factory\CharacterModelFactory;
use Portal\Model\CharacterModel;
use Psr\Container\ContainerInterface;
use PDO;

class CharacterModelFactoryTest extends TestCase
{
    function testInvoke()
    {
        $db = $this->createMock(PDO::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')
            ->willReturn($db);

        $factory = new CharacterModelFactory;
        $case = $factory($container);
        $expected = CharacterModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}
<?php

namespace API\Factory;
use API\Model\CharacterModel;
use Psr\Container\ContainerInterface;

class CharacterModelFactory
{
    /**
     * Creates a Character Model on invoke
     *
     * @param ContainerInterface $container
     * @return CharacterModel object
     */
    public function __invoke(ContainerInterface $container):CharacterModel
    {
        $db = $container->get('dbConnection');
        return new CharacterModel($db);
    }

}
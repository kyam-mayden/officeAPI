<?php


namespace Portal\Factory;
use Portal\Controller\QuotesByCharacterController;
use Psr\Container\ContainerInterface;

class QuotesByCharacterControllerFactory
{
    public function __invoke(ContainerInterface $container): QuotesByCharacterController
    {
        $CharacterModel = $container->get('CharacterModel');
        return new QuotesByCharacterController($CharacterModel);
    }
}
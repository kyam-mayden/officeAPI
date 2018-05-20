<?php

namespace Portal\Factory;
use Portal\Controller\RandomQuoteController;
use Psr\Container\ContainerInterface;

class RandomQuoteControllerFactory
{
    public function __invoke(ContainerInterface $container): RandomQuoteController
    {
        $QuoteModel = $container->get('QuoteModel');
        return new RandomQuoteController($QuoteModel);
    }
}
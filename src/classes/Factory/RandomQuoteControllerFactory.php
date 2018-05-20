<?php

namespace Portal\Factory;
use \portal\Controller\RandomQuoteController;

class RandomQuoteControllerFactory
{
    public function __invoke(ContainerInterface $container): RandomQuoteController
    {
        $QuoteModel = $container->get('QuoteModel');
        return new RandomQuoteController($QuoteModel);
    }

}
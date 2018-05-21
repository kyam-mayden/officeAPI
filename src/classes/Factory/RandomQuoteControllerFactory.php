<?php

namespace API\Factory;
use API\Controller\RandomQuoteController;
use Psr\Container\ContainerInterface;

class RandomQuoteControllerFactory
{
    /**
     * Returns a Random Quote Controller on invoke
     *
     * @param ContainerInterface $container
     * @return RandomQuoteController object
     */
    public function __invoke(ContainerInterface $container): RandomQuoteController
    {
        $QuoteModel = $container->get('QuoteModel');
        return new RandomQuoteController($QuoteModel);
    }
}
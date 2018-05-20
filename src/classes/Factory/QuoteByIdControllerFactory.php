<?php

namespace Portal\Factory;
use Portal\Controller\QuoteByIdController;
use Psr\Container\ContainerInterface;

class QuoteByIdControllerFactory
{
    /**
     * Creates a quoteByIdController on invoke
     *
     * @param ContainerInterface $container
     * @return QuoteByIdController
     */
    public function __invoke(ContainerInterface $container): QuoteByIdController
    {
        $QuoteModel = $container->get('QuoteModel');
        return new QuoteByIdController($QuoteModel);
    }
}
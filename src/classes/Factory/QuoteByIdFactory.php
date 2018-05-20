<?php

namespace Portal\Factory;
use Portal\Controller\QuoteByIdController;
use Psr\Container\ContainerInterface;

class QuoteByIdFactory
{
    public function __invoke(ContainerInterface $container): QuoteByIdController
    {
        $QuoteModel = $container->get('QuoteModel');
        return new QuoteByIdController($QuoteModel);
    }
}
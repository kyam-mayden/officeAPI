<?php

namespace Portal\Factory;
use Portal\Model\QuoteModel;
use Psr\Container\ContainerInterface;

class QuoteModelFactory
{
    /**
     * Creates a Quote Model on invoke
     *
     * @param ContainerInterface $container
     * @return QuoteModel object
     */
    public function __invoke(ContainerInterface $container):QuoteModel
    {
        $db = $container->get('dbConnection');
        return new QuoteModel($db);
    }
}
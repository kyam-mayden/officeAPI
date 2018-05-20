<?php

namespace Portal\Factory;
use Portal\Model\QuoteModel;
use Psr\Container\ContainerInterface;

class QuoteModelFactory
{
    public function __invoke(ContainerInterface $container):QuoteModel
    {
        $db = $container->get('dbConnection');
        return new QuoteModel($db);
    }

}
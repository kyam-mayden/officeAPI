<?php

namespace Portal\Controller;

use Portal\Model\QuoteModel;
use Slim\Http\Request;
use Slim\Http\Response;

class QuoteByIdController
{
    private $QuoteModel;

    function __construct(QuoteModel $QuoteModel)
    {
        $this->QuoteModel=$QuoteModel;
    }


}
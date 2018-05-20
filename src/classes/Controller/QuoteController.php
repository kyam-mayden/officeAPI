<?php


namespace Portal\Controller;
use Portal\Model\QuoteModel;

class QuoteController
{
    protected $QuoteModel;

    /**
     * RandomQuoteController constructor.
     * @param QuoteModel $QuoteModel
     */
    function __construct(QuoteModel $QuoteModel)
    {
        $this->QuoteModel=$QuoteModel;
    }
}
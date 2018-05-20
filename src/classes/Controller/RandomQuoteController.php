<?php


namespace Portal\Controller;

use Portal\Model\QuoteModel;
use Slim\Http\Request;
use Slim\Http\Response;

class RandomQuoteController
{
    private $QuoteModel;

    function __construct(QuoteModel $QuoteModel)
    {
        $this->QuoteModel=$QuoteModel;
    }

    function __invoke(Request $request, Response $response) {
        $data = ['success' => false, 'msg' => 'Error in retrieving quote', 'data' => []];
        $statusCode = 401;
        $quote = $this->QuoteModel->getRandomQuote();
        if($quote){
            $data = [
                'success' => true,
                'character' => $quote['character'],
                'quote' =>$quote['quote'],
            ];
            $statusCode = 200;
        }
        return $response->withJson($data, $statusCode);
    }
}
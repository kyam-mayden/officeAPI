<?php

namespace API\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

class RandomQuoteController extends QuoteController
{
    /**
     * Gets random quote from DB and adds to response
     *
     * @param Request $request
     * @param Response $response
     * @return Response with data from DB appended
     */
    function __invoke(Request $request, Response $response): Response
    {
        $data = ['success' => false, 'msg' => 'Error in retrieving quote', 'data' => []];
        $statusCode = 401;
        $quote = $this->QuoteModel->getRandomQuote();
        if($quote){
            $data = [
                'success' => true,
                'msg' => 'quote successfully retrieved',
                'character' => $quote['character'],
                'quote' =>$quote['quote']
            ];
            $statusCode = 200;
        }
        return $response->withJson($data, $statusCode);
    }
}
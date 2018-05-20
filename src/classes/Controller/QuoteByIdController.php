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

    function __invoke(Request $request, Response $response)
    {
        $data = ['success' => false, 'msg' => 'Error in retrieving quote', 'data' => []];
        $id = $request->getAttribute('id');
        $statusCode = 401;
        $quote = $this->QuoteModel->getQuoteById($id);
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
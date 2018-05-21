<?php

namespace API\Controller;

use API\Model\QuoteModel;
use Slim\Http\Request;
use Slim\Http\Response;

class QuoteByIdController extends QuoteController
{
    /**
     * gets quote by a given ID from URI
     *
     * @param Request $request
     * @param Response $response
     *
     * @return Response appended with quote as JSON
     */
    function __invoke(Request $request, Response $response): Response
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
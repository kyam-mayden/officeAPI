<?php

namespace Portal\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use Portal\Model\CharacterModel;

class QuotesByCharacterController
{
    protected $characterModel;

    /**
     *
     * @param CharacterModel $characterModel
     */
    function __construct(CharacterModel $characterModel)
    {
        $this->characterModel=$characterModel;
    }

    function __invoke(Request $request, Response $response): Response
    {
        $data = ['success' => false, 'msg' => 'Error in retrieving quotes', 'data' => []];
        $character = $request->getAttribute('character');
        $statusCode = 401;
        $quotes = $this->characterModel->getQuotesByCharacter($character);
        if($quotes){
            $data = [
                'success' => true,
                'msg' => 'quotes successfully retrieved',
                'character' => $character,
                'quotes' =>$quotes
            ];
            $statusCode = 200;
        }
        return $response->withJson($data, $statusCode);
    }
}
<?php

namespace Portal\Model;


class QuoteModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getRandomQuote()
    {
        $query = new $this->db->prepare('SELECT `quote`,`character` 
                                         FROM `quote`
                                         WHERE `deleted` = 0;');
        $query->execture();
        $quotes = $query->fetchAll();
        $numberOfQuotes = sizeof($quotes);
        return $quotes[floor(rand(0, $numberOfQuotes))];
        }
}
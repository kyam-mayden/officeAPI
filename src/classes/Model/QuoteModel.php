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
        $query = $this->db->prepare('SELECT `quote`,`character` 
                                         FROM `quote`
                                         WHERE `deleted` = 0;');
        $query->execute();
        $quotes = $query->fetchAll();
        $numberOfQuotes = sizeof($quotes);
        return $quotes[floor(rand(0, $numberOfQuotes-1))];
        }

    public function getQuoteById($id)
    {
        $query = $this->db->prepare('SELECT `quote`,`character` 
                                         FROM `quote`
                                         WHERE `id` = :id
                                         AND `deleted` = 0;');
        $query->bindParam(':id', $id);
        return $query ->fetch();
    }
}
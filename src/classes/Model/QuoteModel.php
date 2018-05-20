<?php

namespace Portal\Model;

class QuoteModel
{
    private $db;

    /**
     * QuoteModel constructor.
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Gets random quote
     *
     * @return quote object including character, quote
     */
    public function getRandomQuote(): array
    {
        $query = $this->db->prepare('SELECT `quote`,`character` 
                                         FROM `quote`
                                         WHERE `deleted` = 0;');
        $query->execute();
        $quotes = $query->fetchAll();
        $numberOfQuotes = sizeof($quotes);
        return $quotes[floor(rand(0, $numberOfQuotes-1))];
        }

    /**
     * returns a quote array by a given ID from URI
     *
     * @param $id from URI
     * @return mixed quote including quote, character
     */
    public function getQuoteById($id): array
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_FLOAT);
        $query = $this->db->prepare('SELECT `quote`,`character` 
                                         FROM `quote`
                                         WHERE `id` = :id
                                         AND `deleted` = 0;');
        $query->bindParam(':id', $id);
        $query->execute();
        return $query ->fetch();
    }
}
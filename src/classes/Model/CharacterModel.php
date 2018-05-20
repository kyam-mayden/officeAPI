<?php

namespace Portal\Model;
use PDO;

class CharacterModel
{
    private $db;

    /**
     * QuoteModel constructor.
     * @param \PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getQuotesByCharacter($character): array
    {
        $characterClean = filter_var($character, FILTER_SANITIZE_STRING);
        $query = $this->db->prepare("SELECT `quote`.`quote`
                                               FROM `quote`
                                               INNER JOIN `character`
                                               ON `quote`.`character`
                                               = `character`.`name`
                                               WHERE `character`.`deleted`
                                               = '0'
                                               AND `character`.`name` = :character;");
        $query->bindParam(':character', $characterClean);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        return $query->fetchAll();
    }
}
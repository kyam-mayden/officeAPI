<?php

namespace Portal\Model;

class CharacterModel
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

    public function getQuotesByCharacter($character)
    {
        $character = filter_var($character, FILTER_SANITIZE_STRING);
        $query = $this->db->prepare("SELECT `quote`.`quote`, `quote`.`character`
                                               FROM `quote`
                                               INNER JOIN `character`
                                               ON `quote`.`character`
                                               = `character`.`name`
                                               WHERE `character`.`deleted`
                                               = '0'
                                               AND `character`.`name` = :character;");
        $query->bindParam(':character', $character);
        $query->execute();
        $query->fetchAll();
    }
}
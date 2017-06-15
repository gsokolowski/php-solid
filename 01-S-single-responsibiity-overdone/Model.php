<?php

class Model
{
    protected $db;
    protected $logger;

    public function __construct(Logger $logger) {

        // you don't need to require Database.php i has been already required in index.php file
        $this->db = $db = Database::connect();
        var_dump('<br />in base model', $this->db);

        $this->logger = $logger;
    }
}
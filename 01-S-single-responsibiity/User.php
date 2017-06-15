<?php

class User{

    private $db;
    private $logger;

    /**
     * User constructor.
     * @param $logger
     */
    public function __construct($logger)
    {
        $this->logger = $logger;
    }
    public function store($data) {

        // connect to database
        $this->db = Database::connect();
        var_dump($this->db);


        // store user in db
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (name, dob, occupation) values(?, ?, ?)";
        $query = $this->db->prepare($sql);

        $result = $query->execute(array($data['name'], $data['dob'], $data['occupation']));


        if($result) {
            // log to file
            $this->logger->logToFile('log.txt', ' User->saved() '.serialize($data));
        }
    }



}
<?php

class User extends Model{

    protected $db;
    protected $logger;


    public function store($data) {

        // store user in db
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (name, dob, occupation) values(?, ?, ?)";
        echo $sql;
        $query = $this->db->prepare($sql);
        $result = $query->execute(array($data['name'], $data['dob'], $data['occupation']));


        if ($result) {
            // log to file
            $this->logger->logToFile('log.txt', ' User->saved() '.serialize($data));
        }
    }

}
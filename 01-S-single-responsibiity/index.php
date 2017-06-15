<?php

// SOLID
// Single respopsnibility
// Class should have one and only one reason to change

// That is simple version of spliting responsiiity
// Every class should have one responsibility
// SO
// Database has one - connection with mysql
// Logger has one - Log to file message
// User has one receives $logger object as dependency injection from Logger class
// Database is Static so user class is reaching it directly without necesity of creating db object


require 'Database.php'; // static class
require 'Logger.php'; // dynamic class
require 'User.php';

$logger = new Logger();
$user = new User($logger);

$data = array(
    'name'=>'Jerzy',
    'dob'=>'2000-03-12',
    'occupation'=>'Doctor',
);

$user->store($data);



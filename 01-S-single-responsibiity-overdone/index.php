<?php

// SOLID
// Single respopsnibility
// Class should have one and only one reason to change

// That is overdone version of spliting responsiiity
// Every class should have one responsibility
// SO
// Database has one - connection with mysql
// Logger has one - Log to file message
// User extends model - this is overdone, you could have only user without model
// other version is without model - onlu user

require 'Database.php';
require 'Logger.php';
require 'Model.php';
require 'User.php';

$logger = new Logger();
$user = new User($logger);

$data = array(
    'name'=>'Stefan',
    'dob'=>'2000-03-12',
    'occupation'=>'Doctor',
);

$user->store($data);



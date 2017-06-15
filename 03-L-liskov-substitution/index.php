<?php

// SOLLID
// Liskov Substitution

// Ability to replace any instance of a parent class with an instance of
// one of its child classes without it negative side effects
// Car{} replaced by Beetle{} class where beetle is a child class and Car a parent class


require 'Car.php';
require 'Driver.php';
require 'Astra.php';

$car = new Car(); // car is parent class
$astra = new Astra(); // car is child class

$driver = new Driver($astra); // dependency injection

$driver->go();

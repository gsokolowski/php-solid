<?php


// SOLID: Interface Segregation
// Classes that implement interfaces should not be forced to implement methods that dont use
// Penguin is not flying so it should not implement BirdInterface interface like Parrot does

//require 'Parrot.php';

//$bird = new Parrot();
//$bird->fly();

require 'Penguin.php';
$bird = new Penguin();
$bird->NoFly();

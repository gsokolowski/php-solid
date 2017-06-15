<?php

require 'BirdInterface.php';

class Parrot implements BirdInterface {

    public function fly() {
        echo 'fly() called';
    }
}
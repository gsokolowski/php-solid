<?php

require 'NoFlyBirdInterface.php';

// can not be foreced to implement BirdInterface becuse it will not use method fly()
// you sould have deferent interface fo Penguin

class Penguin implements NoFlyBirdInterface {
    
    public function NoFly()
    {
        echo 'No Fly called';
    }
}
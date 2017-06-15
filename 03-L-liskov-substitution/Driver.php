<?php

class Driver {

    protected $car;

    /**
     * Driver constructor.
     * @param $car
     */
    public function __construct(Car $car) {
        $this->car = $car;
    }


    public function go() {
        $this->car->drive();
    }
}
<?php
class MotorCycle {
    private $displacement, $capacity, $mileage;
    function __construct($displacement, $capacity, $mileage) {
        $this->mileage = $mileage;
        $this->displacement = $displacement;
        $this->capacity = $capacity;
    }
    function getDisplacement(){
        return $this->displacement;
    }


    function setDisplacement($displacement) {
        $this->displacement = $displacement;
    }
}
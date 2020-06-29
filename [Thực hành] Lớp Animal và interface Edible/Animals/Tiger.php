<?php

include_once (dirname(__FILE__)) . '/../AbstractClass/Animal.php';

class Tiger extends Animal{
    function makeSound()
    {
        // TODO: Implement makeSound() method.
        return "Tiger: roarrrrr!";
    }
}


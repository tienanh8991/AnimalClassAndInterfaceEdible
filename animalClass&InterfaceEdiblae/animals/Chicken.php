<?php
include_once "../abstractClass/Animal.php";
include_once "./abstractClassAndInterface/interfaceClass/Edible.php";

class Chicken extends Animal
{
    public function makeSound()
    {
        return "Checken : cluck-cluck";
    }
    public function howToEat()
    {
        return "could be fried";
    }
}
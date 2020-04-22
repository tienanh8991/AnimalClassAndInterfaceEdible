<?php
include_once "../abstractClass/Animal.php";

class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger : roarrrr!";
    }
}
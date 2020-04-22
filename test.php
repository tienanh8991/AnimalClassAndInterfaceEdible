<?php
include "./animalClass&InterfaceEdiblae/animals/Tiger.php";
include "./animalClass&InterfaceEdiblae/animals/Chicken.php";
include "./animalClass&InterfaceEdiblae/abstractClass/Apple.php";
include "./animalClass&InterfaceEdiblae/abstractClass/Orange.php";

echo "Animal <br>";
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach($animals as $animal){
    echo $animal->makeSound()."<br>";
    if($animal instanceof Chicken){
        echo $animal->howToEat()."<br>";
    }
}
echo "Fruits <br>";
$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit){
    echo $fruit->howToEat() . " <br>";
}
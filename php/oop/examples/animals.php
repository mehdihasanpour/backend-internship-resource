<?php

abstract class Animal
{

    public function makeSound()
    {

    }

    public function move()
    {
    }
}

trait givingbirth
{
    public function parturition()
    {
        return " The animal can give birth";
    }
}

trait hunting
{
    public function hunt()
    {
        return " The animal can hunt";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return "haw haw";
    }

    public function move()
    {
        return "dog moves like a dog";
    }

    use givingbirth;
}

class Wolf extends Animal
{
    public function move()
    {
        return "wolf moves like a wolf";
    }

    public function makeSound()
    {
        return "howling";
    }

    use hunting;
    use givingbirth;
}

$dog = new dog();
$wolf = new wolf();
var_dump($dog->parturition());
var_dump($wolf->hunt());
var_dump($wolf->makeSound());
var_dump($dog->makeSound());
var_dump($dog->move());
var_dump($wolf->move());


?>
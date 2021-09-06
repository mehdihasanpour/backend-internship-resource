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

class wildAnimal extends Animal
{

}

trait Givingbirth
{
    public function parturition()
    {
        return " The animal can give birth";
    }
}

trait Hunting
{
    public function hunt()
    {
        return " The animal can hunt";
    }
}

class Dog extends Animal
{
    use givingbirth;
    use hunting;

    public function makeSound()
    {
        return "haw haw";
    }

    public function move()
    {
        return "dog moves like a dog";
    }


}

class Wolf extends WildAnimal
{
    use hunting;
    use givingbirth;
    public function move()
    {
        return "wolf moves like a wolf";
    }

    public function makeSound()
    {
        return "howling";
    }


}


$wolf = new wolf();

if (is_subclass_of($wolf, 'WildAnimal')) {
    var_dump($wolf->hunt());
} else {

    throw new Exception('this animal cannot hunt');
}
var_dump($wolf->makeSound());
var_dump($wolf->move());
$dog = new dog();
var_dump($dog->makeSound());
var_dump($dog->parturition());
var_dump($dog->move());
if (is_subclass_of($dog, 'WildAnimal')) {
    var_dump($dog->hunt());
} else {

    throw new Exception('this animal cannot hunt');
}


?>
<?php

abstract class Animal
{
    public function __construct(private string $name, private bool $is_parturition)
    {
    }

    public function getName()
    {
        return $this->name;
    }

    public function sound()
    {
        return 'my sound is like ' . $this->name;
    }

    public function move()
    {
        return 'I can move like ' . $this->name;
    }

    public function parturition()
    {

    }
}

trait parturition
{
    public function canPerturition()
    {
        return 'I am a parturition animal';
    }
}

class WildAnimal extends Animal
{
    public function hunt(Animal $animal)
    {
        if (is_subclass_of($animal, WildAnimal::class)) {
            throw new Exception($this->getName() . " can not eat " . $animal->getName());
        }
        return $this->getName() . " can eat " . get_class($animal);
    }
}

class Lion extends WildAnimal
{
    use parturition;
}

class Falcon extends WildAnimal
{
}

class Horse extends Animal
{
    use parturition;
}

$lion = new Lion('lion', true);
$falcon = new Falcon('falcon', false);
var_dump($lion->canPerturition());
var_dump($lion->move());
var_dump($falcon->sound());
var_dump($falcon->hunt(new Horse('riki', true)));
var_dump($lion->hunt($falcon));

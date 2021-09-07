<?php

namespace App\Person;


class IdentifiedPerson extends Person
{
    public function __construct(private PersonalIdentifier $id, string $name, private int $time_of_change)
    {
        parent::__construct($name);
    }

    public function id(): PersonalIdentifier
    {
        return $this->id;
    }

    public function timeOfChange(): int 
    {
        return $this->time_of_change;
    }

    public function addOneTimeToChangeName(): void
    {
        $this->time_of_change++;
    }
}

<?php

namespace App\Person;


class IdentifiedPerson extends Person
{
    public function __construct(private PersonalIdentifier $id, string $name)
    {
        parent::__construct($name);
    }

    public function id(): PersonalIdentifier
    {
        return $this->id;
    }
}

<?php

namespace App\Person;


class Person
{
    public function __construct(protected string $name) {}

    public function name(): string
    {
        return $this->name;
    }
}

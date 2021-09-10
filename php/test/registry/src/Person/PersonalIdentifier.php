<?php

namespace App\Person;

class PersonalIdentifier
{
    public function __construct(private string $value)
    {
        
    }
    public function value(): string
    {
        return $this->value;
    }
}

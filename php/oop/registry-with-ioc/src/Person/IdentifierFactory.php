<?php


namespace App\Person;

use App\Person\PersonalIdentifier;


interface IdentifierFactory
{
    public function create(): PersonalIdentifier;
}

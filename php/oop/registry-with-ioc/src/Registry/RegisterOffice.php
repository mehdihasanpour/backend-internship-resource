<?php

namespace App\Registry;

use App\Person\Person;
use App\Person\PersonalIdentifier;


interface RegisterOffice
{
    public function register(Person $person): PersonalIdentifier;

    public function changeName(PersonalIdentifier $id, string $newName): void;
}
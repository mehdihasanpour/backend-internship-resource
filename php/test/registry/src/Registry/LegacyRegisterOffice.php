<?php

namespace App\Registry;

use App\Person\Person;
use App\Person\PersonalIdentifier;
use App\Person\IdentifiedPerson;
use App\Person\PersonNotFound;
use App\Person\IdentifierFactory;



# DI -> Dependency Injection
# Abstraction, polymorphism, Encapsulation, Inheritance
class LegacyRegisterOffice implements RegisterOffice
{
    private array $people = [];

    public function __construct(private IdentifierFactory $idFactory) {}

    public function register(Person $person): PersonalIdentifier
    {
        // $random = (string) mt_rand(100, 1000) . chr(mt_rand(98, 150));
        $id = $this->idFactory->create();
        // $id = new PersonalIdentifier('x');
        $this->people []= new IdentifiedPerson($id, $person->name());
        return $id;
    }

    public function changeName(PersonalIdentifier $id, string $newName): void
    {
        foreach ($this->people as $index => $person) {
            if ($id->value() === $person->id()->value()) {
                $this->people[$index] = new IdentifiedPerson($person->id(), $newName);
                return;
            }
        }

        throw new PersonNotFound;
    }

    public function people(): array
    {
        return $this->people;
    }
}

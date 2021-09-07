<?php

namespace App\Registry;

use App\Person\Person;
use App\Person\PersonalIdentifier;
use App\Person\IdentifiedPerson;
use App\Person\PersonNotFound;
use App\Person\IdentifierFactory;
use Exception;

class ElectronicRegisteryOffice implements RegisterOffice
{
    private array $people = [];

    public function __construct(private IdentifierFactory $idFactory)
    {
    }

    public function register(Person $person): PersonalIdentifier
    {
        $id = $this->idFactory->create();
        $this->people[] = new IdentifiedPerson($id, $person->name(),0);
        return $id;
    }

    public function changeName(PersonalIdentifier $id, string $newName): void
    {
        foreach ($this->people as $index => $person) {
            if ($id->value() === $person->id()->value()) {
                if($person->timeOfChange() >= 1) throw new Exception('you can not change your name more than one time');
                $person->addOneTimeToChangeName();
                $this->people[$index] = new IdentifiedPerson($person->id(), $newName, $person->timeOfChange());
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

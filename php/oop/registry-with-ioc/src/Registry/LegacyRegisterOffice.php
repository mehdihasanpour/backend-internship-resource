<?php

namespace App\Registry;

use App\Person\Person;
use App\Person\PersonalIdentifier;
use App\Person\IdentifiedPerson;
use App\Person\PersonNotFound;
use App\Person\IdentifierFactory;
use Psr\Log\LoggerInterface;

# DI -> Dependency Injection
# Abstraction, polymorphism, Encapsulation, Inheritance
class LegacyRegisterOffice implements RegisterOffice
{
    private array $people = [];

    public function __construct(private IdentifierFactory $idFactory,
                                private LoggerInterface $logger) {}

    public function register(Person $person): PersonalIdentifier
    {
        $id = $this->idFactory->create();
        $this->people []= new IdentifiedPerson($id, $person->name());
        $this->logger->info(sprintf("User %s registered", $id->value()));
        return $id;
    }

    public function changeName(PersonalIdentifier $id, string $newName): void
    {
        foreach ($this->people as $index => $person) {
            if ($id->value() === $person->id()->value()) {
                $this->people[$index] = new IdentifiedPerson($person->id(), $newName);
                $this->logger->info(
                    sprintf("User %s renamed to %s", $person->id()->value(), $newName)
                );
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

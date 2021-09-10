<?php

namespace App\Person;


class RandomIdentifierFactory implements IdentifierFactory
{
    public function create(): PersonalIdentifier
    {
        return new PersonalIdentifier((string) mt_rand(100, 1000) . chr(mt_rand(98, 150)));
    }
}

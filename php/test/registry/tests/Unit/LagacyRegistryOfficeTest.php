<?php

namespace Test\Unit;

use App\Person\IdentifierFactory;
use App\Person\Person;
use App\Person\PersonalIdentifier;
use App\Registry\LegacyRegisterOffice;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

class LegacyRegistryOfficeTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function test_register()
    {
        $factory = Mockery::mock(IdentifierFactory::class);
        $factory->shouldReceive('create')
            ->once()
            ->andReturn(new PersonalIdentifier('x'));

        $regsitry = new LegacyRegisterOffice($factory);


        $person = new Person('John');
        $regsitry->register($person);

        $this->assertEquals('x', $regsitry->people()[0]->id()->value());
        $this->assertEquals('John', $regsitry->people()[0]->name());
    }
}

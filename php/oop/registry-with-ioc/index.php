<?php

use App\Person\IdentifierFactory;
use App\Person\Person;
use App\Person\RandomIdentifierFactory;
use App\Registry\LegacyRegisterOffice;
use League\Container\Container;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

require 'vendor/autoload.php';

$container = new Container();

$container->delegate(
    new League\Container\ReflectionContainer()
);

$container->add(LoggerInterface::class, function () {
    $logger = new Logger('Regsitry');
    $logger->pushHandler(new StreamHandler('registry.log'));
    return $logger;
});

$container->add(IdentifierFactory::class, fn () => new RandomIdentifierFactory);

// $registry = new LegacyRegisterOffice(new RandomIdentifierFactory, $container->get(LoggerInterface::class));
$registry = $container->get(LegacyRegisterOffice::class);
var_dump($registry);
$p1 = $registry->register(new Person('John Doe'));
$p2 = $registry->register(new Person('Foo Bar'));
$registry->changeName($p1, 'X');
$registry->changeName($p1, 'X');
$registry->changeName($p1, 'X');
$registry->changeName($p1, 'X');

foreach ($registry->people() as $person) {
    var_dump($person->name());
}

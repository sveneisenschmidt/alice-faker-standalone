<?php

require_once __DIR__.'/vendor/autoload.php';

use \Nelmio\Alice\Instances\Processor\Processable;
use \Nelmio\Alice\Instances\Processor\Methods\Faker;

$processable = new Processable('<numberBetween(1, 99)>');
$method = new Faker($providers = []);
$value = $method->process($processable, $variables = []);

print sprintf('Result: %s %s', $value, PHP_EOL);


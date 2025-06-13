<?php

use Dfed\PeshkarikiTest\App\App;
use Dfed\PeshkarikiTest\Logging\Concrete\EchoLogger;
use Dfed\PeshkarikiTest\Repository\Concrete\MySqlAnimalRepository;
use Dfed\PeshkarikiTest\Storage\MySql;

require('vendor/autoload.php');

$logger = new EchoLogger();
$animalRepository = new MySqlAnimalRepository(new MySql());
$app = new App($logger, $animalRepository);
$app->run();
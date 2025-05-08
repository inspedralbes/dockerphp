<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://root:example@mongo:27017");

$collection = $client->demo->users;

// Insereix dades d'exemple
$collection->insertMany([
    ['name' => 'Anna', 'age' => 28],
    ['name' => 'Marc', 'age' => 35],
    ['name' => 'Laia', 'age' => 22]
]);

echo "Dades inserides .\n";
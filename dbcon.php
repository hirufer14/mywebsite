<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('portfoliowebsite-bf5c6-firebase-adminsdk-cry0y-49a9976de6.json')
    ->withDatabaseUri('https://portfoliowebsite-bf5c6-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
?>
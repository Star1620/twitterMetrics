#!/usr/bin/env php
<?php declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

try {
    exit(App\Bootstrap::boot()
        ->createContainer()
        ->getByType(Contributte\Console\Application::class)
        ->run());
} catch (\Exception $e){
    echo "Exeption occured: \n";
    echo $e->getMessage() . " \n ";
    exit("Please, fix base app before processing.");
}
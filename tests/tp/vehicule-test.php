<?php

use App\tp\Location;
use App\tp\Moto;
use App\tp\Voiture;

require_once __DIR__."/../../vendor/autoload.php";

$voiture = new Voiture("Tesla","Model 3",220,100,4,"électrique");

echo $voiture->afficherInfos();

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$moto = new Moto("Yamaha","MT-07",210,50,"Acier");

echo $moto->afficherInfos();

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$location = new Location(5);

$location->louerVehicule($voiture);
$location->louerVehicule($moto);

$location->afficherDetailsLocation();
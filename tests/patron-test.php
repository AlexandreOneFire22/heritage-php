<?php

use App\Patron;

require_once __DIR__."/../vendor/autoload.php";

$patron = new Patron("Pierre","DUPOND",50,"caisse à savon");

$patron->presenter();
$patron->deplacer();
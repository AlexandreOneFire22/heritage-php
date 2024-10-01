<?php

use App\ChefService;

require_once __DIR__."/../vendor/autoload.php";

$chefInfo = new ChefService("Alain","DURAND",38,"informatique");

$chefInfo->presenter();





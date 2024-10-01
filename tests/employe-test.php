<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Employe;

$emp = new Employe("Alexandre","GAUTHIER",19);

$emp->presenter();









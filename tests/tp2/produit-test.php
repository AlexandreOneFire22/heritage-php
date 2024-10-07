<?php

use App\tp2\ProduitAlimentaire;
use App\tp2\ProduitElectronique;
use App\tp2\Catalogue;

require_once __DIR__."/../../vendor/autoload.php";

echo PHP_EOL;
echo PHP_EOL;

$produitAlimentaire = new ProduitAlimentaire("Pomme",1,100,DateTime::createFromFormat("d/m/Y","04/10/2024"));

 echo $produitAlimentaire->afficheInfos();

 echo PHP_EOL;
 echo PHP_EOL;
 echo PHP_EOL;

$produitElectronique = new ProduitElectronique("Smartphone",500,10,36);

echo $produitElectronique->afficheInfos();

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "---------------------------------------------------------";
echo PHP_EOL;

$catalogue = new Catalogue();

$catalogue->ajouterProduit($produitAlimentaire);
$catalogue->ajouterProduit($produitElectronique);

echo $catalogue->afficherProduits();

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo "-----------------------------------------------------------------------------------------------------------";
echo PHP_EOL;

$catalogue->calculerTotalPrix();



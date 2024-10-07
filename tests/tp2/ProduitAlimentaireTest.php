<?php

use App\tp2\ProduitAlimentaire;
use App\tp2\ProduitElectronique;
use App\tp2\Catalogue;

use PHPUnit\Framework\TestCase;

require_once __DIR__."/../../vendor/autoload.php";

class ProduitAlimentaireTest extends TestCase {

    public static function produitAlimentaireProvider() : array
    {
        return [
            "Date de péremption > 7 jours" => [new ProduitAlimentaire("pomme", 10, 1, DateTime::createFromFormat("d/m/Y", "28/12/2024")), 10],
            "Date de péremption > 7 jours" => [new ProduitAlimentaire("pomme", 10, 1, DateTime::createFromFormat("d/m/Y", "08/10/2024")), 7]
        ];
    }

    #[DataProvider("produitAlimentaireProvider")]
    public function testCalculerPrixFinal_PrixCorrect($produit,$resultatAttendu){

        //Act
        $resultat = $produit->calculerPrixFinal();

        //Assert
        $this->assertEquals($resultatAttendu,$resultat);
    }



}
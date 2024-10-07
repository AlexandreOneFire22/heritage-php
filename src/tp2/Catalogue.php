<?php

namespace App\tp2;

class Catalogue{

    private array $produits = [];


    public function ajouterProduit(Produit $produit) : void
    {
        $this->produits [] = $produit;
    }

    public function afficherProduits() : void
    {
        foreach ($this->produits as $produit){
            echo $produit->afficheInfos();
            echo PHP_EOL;
            echo PHP_EOL;
        }
    }

    public function calculerTotalPrix() : void
    {
        $prixFinal = 0;

        echo "Catalogue des produits : ";
        echo PHP_EOL;
        foreach ($this->produits as $produit) {

            echo "-------------------------------------------------";
            echo PHP_EOL;

            switch (get_class($produit)){

                case ("App\\tp2\ProduitAlimentaire") :
                    echo "Produit Alimentaire : ";
                    break;

                case ("App\\tp2\ProduitElectronique") :
                    echo "Produit Electronique : ";
                    break;
            }

            echo PHP_EOL;

             echo $produit->afficheInfos();
            $prixFinal += $produit->calculerPrixFinal()*$produit->getQuantite();
            echo PHP_EOL;
        }
        echo PHP_EOL;
        echo "Total des prix des produits dans le catalogue : $prixFinal €";
    }
}

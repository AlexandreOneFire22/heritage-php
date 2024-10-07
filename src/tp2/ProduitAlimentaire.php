<?php

namespace App\tp2;

class ProduitAlimentaire extends Produit {

    private \DateTime $datePeremption;

    public function __construct(string $nom, float $prixInitial, int $quantite, \DateTime $datePeremption)
    {
        parent::__construct($nom, $prixInitial, $quantite);
        $this->datePeremption = $datePeremption;
    }

    public function afficheInfos() : string
    {
        return "Nom : {$this->getNom()} \n
Prix Initial : {$this->getPrixInitial()} € \n
Quantité : {$this->getQuantite()} \n
Date de Péremption : $this->datePeremption";
    }

    public function calculerPrixFinal(): float
    {
        if (date_diff($this->datePeremption,new \DateTime())->format('%a')<7){
            return $this->getPrixInitial()*0.7;
        }
        return $this->getPrixInitial();
    }

}
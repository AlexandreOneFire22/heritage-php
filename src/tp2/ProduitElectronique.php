<?php

namespace App\tp2;

class ProduitElectronique extends Produit {

    private int $garantie;

    public function __construct(string $nom, float $prixInitial, int $quantite, int $garantie)
    {
        parent::__construct($nom, $prixInitial, $quantite);
        $this->garantie = $garantie;
    }

    /**
     * @return int
     */
    public function getGarantie(): int
    {
        return $this->garantie;
    }

    /**
     * @param int $garantie
     */
    public function setGarantie(int $garantie): void
    {
        $this->garantie = $garantie;
    }



    public function calculerPrixFinal(): float
    {
        if ($this->garantie>24){
            return $this->getPrixInitial()*0.8;
        }
        return $this->getPrixInitial();
    }

    public function afficheInfos(): string
    {
        return "Nom : {$this->getNom()}
Prix Initial : {$this->getPrixInitial()} €
Quantité : {$this->getQuantite()}
Durée garantie : $this->garantie mois
Prix Final : {$this->calculerPrixFinal()} €";
    }
}
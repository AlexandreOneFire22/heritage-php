<?php

namespace App\tp2;

class ProduitAlimentaire extends Produit {

    private \DateTime $datePeremption;

    public function __construct(string $nom, float $prixInitial, int $quantite, \DateTime $datePeremption)
    {
        parent::__construct($nom, $prixInitial, $quantite);
        $this->datePeremption = $datePeremption;
    }

    /**
     * @return \DateTime
     */
    public function getDatePeremption(): \DateTime
    {
        return $this->datePeremption;
    }

    /**
     * @param \DateTime $datePeremption
     */
    public function setDatePeremption(\DateTime $datePeremption): void
    {
        $this->datePeremption = $datePeremption;
    }



    public function calculerPrixFinal(): float
    {
        if (date_diff($this->datePeremption,new \DateTime())->format('%a')<7){
            return $this->getPrixInitial()*0.7;
        }
        return $this->getPrixInitial();
    }

    public function afficheInfos() : string
    {
        return "Nom : {$this->getNom()}
Prix Initial : {$this->getPrixInitial()} €
Quantité : {$this->getQuantite()}
Date de Péremption : {$this->datePeremption->format('d/m/Y')}
Prix Final : {$this->calculerPrixFinal()} €";
    }

}
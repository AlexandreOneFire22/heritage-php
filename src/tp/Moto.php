<?php

namespace App\tp;

class Moto extends Vehicule {

    private string $typeGuidon;

    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier, string$typeGuidon)
    {
        parent::__construct($marque, $modele, $vitesseMax, $prixJournalier);
        $this->typeGuidon = $typeGuidon;
    }

    public function afficherInfos(): string
    {
        return "Marque : {$this->getMarque()} \n
Modèle : {$this->getModele()} \n
Vitesse Max : {$this->getVitesseMax()} km/h \n
Type de Guidon : $this->typeGuidon \n
Prix Journalier : {$this->getPrixJournalier()} €";
    }

    public function calculerCoutLocation(int $nbJours): int
    {
        if ($nbJours > 7 ){
            return $this->getPrixJournalier() * $nbJours * 0.95;
        }
        return $this->getPrixJournalier() * $nbJours;
    }


}
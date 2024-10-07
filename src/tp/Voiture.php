<?php

namespace App\tp;

class Voiture extends Vehicule {

    private int $nombrePortes;
    private string $typeCarburant;

    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier,
                                int $nombrePortes, string $typeCarburant)
    {
        parent::__construct($marque, $modele, $vitesseMax, $prixJournalier);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    /**
     * @return int
     */
    public function getNombrePortes(): int
    {
        return $this->nombrePortes;
    }

    /**
     * @param int $nombrePortes
     */
    public function setNombrePortes(int $nombrePortes): void
    {
        $this->nombrePortes = $nombrePortes;
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     */
    public function setTypeCarburant(string $typeCarburant): void
    {
        $this->typeCarburant = $typeCarburant;
    }


    public function afficherInfos(): string
    {
        return "Marque : {$this->getMarque()} \n
Modèle : {$this->getModele()} \n
Vitesse Max : {$this->getVitesseMax()} km/h \n
Nombre de Portes : $this->nombrePortes \n
Type de Carburant : $this->typeCarburant
Prix Journalier : {$this->getPrixJournalier()} €";
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        if ($this->typeCarburant == "électrique"){
            return $this->getPrixJournalier() * $nbJours * 1.10;
        }
        return $this->getPrixJournalier() * $nbJours;
    }

}
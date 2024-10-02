<?php

namespace App\tp;

class Vehicule{

    private string $marque;
    private string $modele;
    private int $vitesseMax;
    private float $prixJournalier;

    /**
     * @param string $marque
     * @param string $modele
     * @param int $vitesseMax
     * @param float $prixJournalier
     */
    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
        $this->prixJournalier = $prixJournalier;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     */
    public function setVitesseMax(int $vitesseMax): void
    {
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * @return float
     */
    public function getPrixJournalier(): float
    {
        return $this->prixJournalier;
    }

    /**
     * @param float $prixJournalier
     */
    public function setPrixJournalier(float $prixJournalier): void
    {
        $this->prixJournalier = $prixJournalier;
    }

    public function afficherInfos() : string {
        return "Marque : $this->marque \n
Modèle : $this->modele \n
Vitesse Max : $this->vitesseMax km/h \n
Prix Journalier : $this->prixJournalier €";
    }

    public function calculerCoutLocation(int $nbJours) : int {
        return $this->prixJournalier * $nbJours;
    }


}
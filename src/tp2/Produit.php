<?php

namespace App\tp2;

class Produit{

    private string $nom;
    private float $prixInitial;
    private int $quantite;

    /**
     * @param string $nom
     * @param float $prixInitial
     * @param int $quantite
     */
    public function __construct(string $nom, float $prixInitial, int $quantite)
    {
        $this->nom = $nom;
        $this->prixInitial = $prixInitial;
        $this->quantite = $quantite;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return float
     */
    public function getPrixInitial(): float
    {
        return $this->prixInitial;
    }

    /**
     * @param float $prixInitial
     */
    public function setPrixInitial(float $prixInitial): void
    {
        $this->prixInitial = $prixInitial;
    }

    /**
     * @return int
     */
    public function getQuantite(): int
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }


    public function afficheInfos() : string
    {
        return "Nom : $this->nom \n
Prix Initial : $this->prixInitial € \n
Quantité : $this->quantite";
    }

    public function calculerPrixFinal() : float
    {
        return $this->prixInitial;
    }

}
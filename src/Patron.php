<?php

namespace App;

// La classe Patron hérite de la classe Employe
// Elle hérite de tous les attributs et toute les méthodes de la classe Employé

//UN OBJET DE LA CLASSE PATRON EST EGALEMENT UN OBJET DE LA CLASSE EMPLOYE

class Patron extends Employe
{
    //Attributs spécifiques
    private string $voiture;

    public function __construct(string $prenom, string $nom, int $age,string $voiture)
    {
        //Appel au constructeur de la super-classe (classe Employé)
        parent::__construct($prenom, $nom, $age);

        $this->voiture = $voiture;

    }

    /**
     * @return string
     */
    public function getVoiture(): string
    {
        return $this->voiture;
    }

    /**
     * @param string $voiture
     */
    public function setVoiture(string $voiture): void
    {
        $this->voiture = $voiture;
    }

    public function deplacer() : void
    {
        dump("je me déplace en $this->voiture");
    }


}
<?php

namespace App;

class ChefService extends Employe
{
//Attributs spécifiques
    private string $service;

    public function __construct(string $prenom, string $nom, int $age,string $service)
    {
        //Appel au constructeur de la super-classe (classe Employé)
        parent::__construct($prenom, $nom, $age);

        $this->service = $service;

    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService(string $service): void
    {
        $this->service = $service;
    }


    //Redéfinir la méthode présenter
    public function presenter(): void
    {
        dump("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} et je suis le chef du service $this->service.");
    }

}
<?php

namespace App\tp;

class Location{

    private array $vehicules = [];
    private int $nbJours;

    /**
     * @param int $nbJours
     */
    public function __construct(int $nbJours)
    {
        $this->nbJours = $nbJours;
    }

    public function louerVehicule($vehicule) : void
    {
        $this->vehicules [] = $vehicule;
    }


    public function afficherDetailsLocation() : void
    {
        $coutTotal = 0;
        echo "Location pour $this->nbJours jours : \n";
        foreach ($this->vehicules as $vehicule){
            echo $vehicule->afficherInfos()."\n";
            echo "Coût pour $this->nbJours jours : {$vehicule->calculerCoutLocation($this->nbJours)} € \n";
            echo PHP_EOL;
            $coutTotal += $vehicule->calculerCoutLocation($this->nbJours);
        }
        echo "Coût total de la location : $coutTotal €";
    }


}
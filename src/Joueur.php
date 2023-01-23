<?php

namespace App;

use App\AbstractJeu;
use App\GamePlayInterface;

final class Joueur extends AbstractJeu implements GamePlayInterface{

    public function __construct()
    {
        parent::__construct();
        $this->location = 'Paris';
    }

   public function attack($ennemi) : string
   {
      $ennemi->setLife($ennemi->getLife() - $this->strength);
      return $this->name . " attaque";
   }

   public function defend() : string 
   {
        return $this->name . " se défend";
   }


    public function getName()
    {
          return $this->name;
    }

    public function getLife()
    {
          return $this->life;
    }

    public function getStrength()
    {
          return $this->strength;
    }

    public function getLocation()
    {
          return $this->location;
    }  

    public function setLife($life)
    {
          $this->life = $life;
    }

    public function setStrength($strength)
    {
          $this->strength = $strength;
    }

    public function setLocation($location)
    {
          $this->location = $location;
    }

    public function __toString()
    {
      return $this->name . " a " . $this->life . " points de vie et se trouve à " . $this->location;
    }
}
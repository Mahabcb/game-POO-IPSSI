<?php

namespace App;

abstract class AbstractJeu{
    protected $name;
    protected $life;
    protected $strength;
    protected $location;

    public function __construct()
    {
        $this->life = 100;
        $this->strength = rand(0, 10);
        $this->name = 'Joueur';
    }

   public function setName($name)
   {
         $this->name = $name;
   }

    public function getName()
    {
          return $this->name;
    }

    public function getLife()
    {
          return $this->life;
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
}
<?php

namespace App;

interface GameplayInterface{
    public function attack(AbstractJeu $ennemi) : string ;
    public function defend() : string ;
}
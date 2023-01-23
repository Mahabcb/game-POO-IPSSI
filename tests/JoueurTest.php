<?php

namespace App\Tests;

use App\Ennemi;
use App\Joueur;
use PHPUnit\Framework\TestCase;

class JoueurTest extends TestCase
{
   public function testLocationIsParis()
   {
        $this->getMockForAbstractClass('App\AbstractJeu');
        $joueur = new Joueur();
        $this->assertEquals('Paris', $joueur->getLocation());
   }

   public function testDefend()
   {
    $this->getMockForAbstractClass('App\AbstractJeu');
    $joueur = new Joueur();
    $this->assertEquals('Joueur se défend', $joueur->defend());
   }

   public function testLife()
   {
    $this->getMockForAbstractClass('App\AbstractJeu');
    $joueur = new Joueur();
    $this->assertEquals(100, $joueur->getLife());
   }

   public function testAttack()
   {
    $this->getMockForAbstractClass('App\AbstractJeu');
    $joueur = new Joueur();
    $ennemi = new Ennemi();
    $joueur->attack($ennemi);
    $this->assertEquals(100 - $joueur->getStrength(), $ennemi->getLife());
   }
}


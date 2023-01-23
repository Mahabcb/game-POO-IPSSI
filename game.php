<?php
require_once('vendor/autoload.php');

use App\Ennemi;
use App\Joueur;

$valentine = new Joueur();
$gobelin = new Ennemi();

$valentine->setName('Valentine');
$gobelin->setName('Gobelin');
dump($gobelin);
dump($valentine);
$valentine->attack($gobelin);

dump($gobelin);
dump($valentine);



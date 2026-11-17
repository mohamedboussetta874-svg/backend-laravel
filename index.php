<?php

require_once __DIR__ . '/vendor/autoload.php';

use Banque\Compte;
use Banque\CompteCourant;
use Banque\CompteEpargne;


$compte = new Compte("C001", "Ali", 1000);

$compte->deposer(500);
$compte->retirer(200);

echo $compte->afficher() . PHP_EOL;



$cc = new CompteCourant("C002", "Ahmed", 1000, 500);

$cc->retirer(1200);

echo $cc->afficher() . PHP_EOL;



$ce = new CompteEpargne("C003", "Sara", 2000, 0.03);

$ce->ajouterInterets();

echo $ce->afficher() . PHP_EOL;

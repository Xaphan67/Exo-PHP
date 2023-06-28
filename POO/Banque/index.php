<?php

require_once("Compte.php");
require_once("Titulaire.php");

$titulaire1 = new Titulaire("Lefevre", "Jaques", "1985-01-17", "Obernai");
$titulaire2 = new Titulaire("Dujardin", "Benoît", "2001-06-22", "Reims");

$compte1 = new Compte("Livret A", "€", $titulaire1);
$compte2 = new Compte("Livret Bleu", "€", $titulaire1);
$compte3 = new Compte("Compte courant", "$", $titulaire2);

echo $titulaire1->afficherInformations();
echo $compte1->crediterCompte(250.5);
echo $compte1->afficherInformations();
echo $compte1->débiterCompte(50.75);
echo $compte1->effectuerVirement(50, $compte2);
echo $compte1->afficherInformations();
echo $compte2->afficherInformations();
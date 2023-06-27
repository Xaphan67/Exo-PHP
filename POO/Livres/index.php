<?php

//Inclut les 2 fichiers des classes Auteur et Livre pour pouvoir les utiliser plus tard
require_once("Auteur.php");
require_once("Livre.php");

// Instancie 2 auteurs et 6 livres
$auteur1 = new Auteur("King", "Stephen");
$auteur2 = new Auteur("Céline", "Louis-Ferdinand");
$livres = [
    new Livre("Ca", 1138, 1986, 20, $auteur1),
    new Livre("Simetierre", 374, 1983, 15, $auteur1),
    new Livre("Le Fléau", 823, 1978, 14, $auteur1),
    new Livre("Shining", 447, 1977, 16, $auteur1),
    new Livre("Voyage au bout de la nuit", 625, 1932, 19.99, $auteur2),
    new Livre("Mort à crédit", 622, 1936, 9.99, $auteur2)
];

echo $auteur1->afficherBibliographie();
echo $auteur2->afficherBibliographie();
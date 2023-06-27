<?php

//Inclut les 2 fichiers des classes Auteur et Livre pour pouvoir les utiliser plus tard
require_once("Auteur.php");
require_once("Livre.php");

// Instancie deux auteurs et 6 luvres
$auteur1 = new Auteur("King", "Stephen");
$auteur2 = new Auteur("Céline", "Louis-Ferdinand");
$livres = [
    new Livre("Ca", 1138, 1986, 20, $auteur1),
    new Livre("Simetierre", 374, 1983, 15, $auteur1),
    new Livre("Le Fléau", 823, 1978, 14, $auteur1),
    new Livre("Shining", 447, 1977, 16, $auteur1),
    new Livre("Voyage au bout de la nuit", 625, 1932, 20, $auteur2),
    new Livre("Mort à crédit", 622, 1936, 10, $auteur2)
];

// Affiche la bibliographie d'un auteur donné parmi une liste de livres
function afficherBibliographie($auteur, $livres)
{
    $result = "";

    //Affiche Nom et prénom de l'auteur
    $result .= "<h1>Livres de " . $auteur->getPrenom() . " " . $auteur->getNom() . "</h1></br>";

    // Parcours les livres
    foreach ($livres as $livre)
    {
        // Vérifie que le nom et le prénom de l'auteur correspondent à ceux de l'auteur de chaque livre. Si oui -> affiche le livre
        if ($livre->getAuteur()->getNom() == $auteur->getNom() && $livre->getAuteur()->getPrenom() == $auteur->getPrenom())
        {
            $result .= $livre . "</br>";
        }
    }

    // Retourne le résultat suivit d'un saut de ligne
    return $result . "</br>";
}

echo afficherBibliographie($auteur1, $livres);
echo afficherBibliographie($auteur2, $livres);
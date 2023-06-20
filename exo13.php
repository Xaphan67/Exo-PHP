<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$somme = 0;

echo "Les notes obtenues par l’élève sont : ";
foreach ($notes as $note)
{
    echo "$note "; // Affiche là note
    $somme+=$note; // Ajoute la note à la somme totale pour calculer la moyenne plus tard
}

echo "</br>";

// Calcule la moyenne
$moyenne = round($somme / count($notes), 2);

echo "Sa moyenne générale est donc de : $moyenne";
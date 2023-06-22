<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$valeur_franc = 10000000;

echo "Montant en francs : $valeur_franc</br>$valeur_franc francs = " . round($valeur_franc/6.55957, 2);

// Séparation
echo "<hr>";

// Solution avec number_format pour un affichage plus agréable
echo "Montant en francs : $valeur_franc</br>$valeur_franc francs = " . number_format($valeur_franc/6.55957, 2, ",", " ");
<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

echo "La date de naissance de la personne est le 17/01/1985 :</br>";

$maintenant = time(); // Temps à l'instant ou le code est executé
$date_naissance = strtotime("1985-01-17"); // Temps à l'instant de la date de naissance de la personne
$temps = $maintenant - $date_naissance; // Temps entre les deux dates
echo "difference temps : $temps</br>";

$années = floor($temps / (365 * 24 * 60 * 60)); // 365 jours * 24 heures * 60 minutes * 60 secondes dans une année
$temps -= $années * 365 * 24 * 60 * 60; // Retire le temps des années au temps total

$mois = floor($temps / (30 * 24 * 60 * 60)); // 30 jours * 24 heures * 60 minutes * 60 secondes dans un mois
$temps -= $mois * 30 * 24 * 60 * 60; // Retire le temps des mois au temps total

$jours = floor($temps / (24 * 60 * 60)); // 24 heures * 60 minutes * 60 secondes dans un jour

echo "Âge de la personne : $années ans $mois mois $jours jours";


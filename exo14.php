<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

echo "La date de naissance de la personne est le 17/01/1985 :";

$maintenant = time(); // Temps à l'instant ou le code est executé
$date_naissance = strtotime("1985-01-17"); // Temps à l'instant de la date de naissance de la personne
$temps = $maintenant - $date_naissance; // Temps entre les deux dates

$temps_jours = round($temps / (60 * 60 * 24)); // Secondes * minutes * heures

echo $mois = intval($temps_jours / 30);


<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

echo "La date de naissance de la personne est le 17/01/1985 :</br>";

$now = new DateTime();
$birthDate = new DateTime("1985-01-17");
$age = $now->diff($birthDate);
echo "Âge de la personne : $age->y ans $age->m mois $age->d jours";
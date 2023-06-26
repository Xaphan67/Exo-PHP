<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

echo "La date de naissance de la personne est le 17/01/1985 :</br>";

$now = new DateTime(); //Instancie un nouvel objet DateTime avec la date actuelle;
$birthDate = new DateTime("1985-01-17"); //Instancie un nouvel objet DateTime avec la date spécifiée;
$age = $now->diff($birthDate); // Calcule la différence entre les deux dates
echo "Âge de la personne : $age->y ans $age->m mois $age->d jours"; //y = years, m = months, d = days
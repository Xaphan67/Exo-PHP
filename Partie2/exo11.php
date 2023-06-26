<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.
</p>

<h2>Résultat</h2>

<?php

function formaterDateFr($date)
{
    $datetime = new DateTime($date); // Instance un objet DateTime avec la date donéne en paramètre
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE); // formate la date IntlDateFormatter -> Full pour avoir une date complète

    return ucfirst($formatter->format($datetime)); // ucfirst pour première lettre du jour en majuscule
}

echo formaterDateFr("2018-02-23");
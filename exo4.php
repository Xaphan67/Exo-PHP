<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

// Supprime les espaces et convertie la phrase en minuscule
$phrase_org = strtolower(str_replace(" ", "", $phrase));

// Inverse les caractères de la phrase
$phrase_inverse = strrev($phrase_org);

// Vérifie si la chaîne originale et la chaîne inversée sont identiques
if ($phrase_org == $phrase_inverse)
{
    echo "La phrase « $phrase » est palindrome";
}
else
{
    echo "La phrase « $phrase » n'est pas palindrome";
}
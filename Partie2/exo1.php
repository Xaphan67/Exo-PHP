<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);</p>

<h2>Résultat</h2>

<?php

// Convertit le text en majuscules et en rouge
function convertirMajRouge($texte)
{
    // Color: red -> Couleur rouge
    // strtoupper -> texte en majuscules
    return '<span style="color: red">' . strtoupper($texte) . "</span>";
}

echo convertirMajRouge("mon texte en parametre");
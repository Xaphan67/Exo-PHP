<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

$adresse = "contact@elan";

// filter -> FILTER_VALIDATE_EMAIL retourne true si $adresse est une adresse e-mail valide
$valide = filter_var($adresse, FILTER_VALIDATE_EMAIL);

echo "L'adresse $adresse " . ($valide ? "est une adresse e-mail valide" : "n'est pas une adresse e-mail valide");
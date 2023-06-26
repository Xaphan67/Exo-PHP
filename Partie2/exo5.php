<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($noms)
{
    $result = "";

    foreach($noms as $input)
    {
        $result .= "<p>" . $input . ':  <input type="text" name="' . $input . '" /></p>';
    }

    return $result;
}

echo afficherInput($nomsInput);
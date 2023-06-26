<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements)
{
    $result = '<select name="">';

    foreach($elements as $element)
    {
        $result .= '<option value="' . $element . '">' . "$element </option>"; 
    }

    $result .= "</select>";

    return $result;
}

echo alimenterListeDeroulante($elements);
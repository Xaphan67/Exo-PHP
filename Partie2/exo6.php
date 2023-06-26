<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

// Crée une liste déroulante à partir des éléments du tableau passé en paramères
function alimenterListeDeroulante($elements)
{
    //select -> Liste déroulante
    $result = '<select name="civilité">';

    // Ajoute une option pour chaque élément du tableau
    foreach($elements as $element)
    {
        $result .= '<option value="' . $element . '">' . "$element </option>"; 
    }

    // Ferme la balise select
    $result .= "</select>";

    return $result;
}

echo alimenterListeDeroulante($elements);
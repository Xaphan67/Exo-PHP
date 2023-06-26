<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

// Affiche un bouton radio par élément contenu dans un tableau passé en paramètre
function afficherRadio($elements)
{
    $result = '
    <fieldset>';

    // Parcours le tableau
    // $Key contient l'index de la valeau du tableau assocée -> Démarre à 0
    foreach($elements as $key => $value)
    {
        // Si la clé est égale à 0, il s'agit du premier élément du tableau. Il sera séléctionné par défaut
        $checked = $key == 0 ? "checked" : "";

        $result .= '
        <div>
            <input type="radio" id="' . $value . '" name="civilité" value="' . $value . '" ' .$checked . '>
            <label for= "' . $value . '">' . $value . "</label>
        </div>";
    }

    $result .= "
    </fieldset>";

    return $result;
}

echo afficherRadio($elements);
<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function afficherRadio($elements)
{
    $result = '
    <fieldset>';

    foreach($elements as $key => $value)
    {
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
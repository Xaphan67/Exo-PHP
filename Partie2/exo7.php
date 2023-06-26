<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = array("Choix 1" => false, "Choix 2" => true, "Choix 3" => false);

// Crée une liste de checkboxes à partir d'un tableau passé en paramètres
function genererCheckbox($elements)
{
    // Début de la balise fieldset
    $result = '
    <fieldset>';

    // Parcours le tableau
    foreach($elements as $key => $value)
    {
        $checked = "";
        if ($value)
        {
            $checked = "checked";
        }

        // input type="checkbox" pour les cases à cocher
        // label -> Ce que l'utilisateur vera à l'écean pour l'option
        $result .= '
        <div>
            <input type="checkbox" id="' . $key . '" name="' . $key . '"' . $checked . '>
            <label for= "' . $key . '">' . $key . "</label>
        </div>";
    }

    // Fin de la balise fieldset
    $result .= "
    </fieldset>";

    return $result;
}

echo genererCheckbox($elements);
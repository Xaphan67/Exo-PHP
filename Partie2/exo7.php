<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php

$elements = array("Choix 1" => false, "Choix 2" => true, "Choix 3" => false);

function genererCheckbox($elements)
{
    $result = '
    <fieldset>';

    foreach($elements as $key => $value)
    {
        $checked = "";
        if ($value)
        {
            $checked = "checked";
        }

        $result .= '
        <div>
            <input type="checkbox" id="' . $key . '" name="' . $key . '"' . $checked . '>
            <label for= "' . $key . '">' . $key . "</label>
        </div>";
    }

    $result .= "
    </fieldset>";

    return $result;
}

echo genererCheckbox($elements);
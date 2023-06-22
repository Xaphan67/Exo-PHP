<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</br>
$p1 = new Personne("DUPONT","Michel", "1980-02-19");</br>
$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");</p>

<h2>Résultat</h2>

<?php

Class Personne
{
    private string $_name;
    private string $_first_name;
    private DateTime $_birthdate;

    function __construct($name, $first_name, string $birthdate)
    {
        $this->_name = $name;
        $this->_first_name = $first_name;
        $this->_birthdate = new DateTime($birthdate);
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getFirstName()
    {
        return $this->_first_name;
    }

    public function setFirstName($firstname)
    {
        $this->_first_name = $firstname;
    }

    public function getBirthdate()
    {
        return $this->_birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }
}

$p1 = new Personne("DUPONT","Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice", "1985-01-17");

$now = new DateTime();
echo $p1->getFirstName() . $p1->getFirstName() . " à " . $now->diff($p1->getBirthdate())->y . " ans</br>";
echo $p2->getFirstName() . $p2->getFirstName() . " à " . $now->diff($p2->getBirthdate())->y . " ans</br>";
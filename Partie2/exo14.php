<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</br>
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :</br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");</br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);</br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :</br>
echo $v1->getInfos()."&ltbr/>";</br>
echo $ve1->getInfos()."&ltbr/>";</p>

<h2>Résultat</h2>

<?php

Class Voiture
{
    // Visibilité protected pour pouvoir accéder a ces attributs depuis une classe qui extends celle-çi
    protected string $_marque;
    protected string $_modèle;

    function __construct(string $marque, string $modèle)
    {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function getModèle()
    {
        return $this->_modèle;
    }

    public function setModèle($modèle)
    {
       $this->_modèle = $modèle;
    }

    public function getInfos()
    {
        return "Marque : " . $this->getMarque() . "</br>
        Modèle : " .$this->getModèle();
    }
}

// extends pour hériter des attributs et méthodes d'une autre classe (Ici Voiture)
Class VoitureElec extends Voiture
{
    private int $_autonomie;

    function __construct(string $marque, string $modèle, int $autonomie)
    {
        // Apelle le constructeur de la classe parent (Voiture)
        parent::__construct($marque, $modèle);
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie()
    {
        return $this->_autonomie;
    }

    public function setAutonomie($autonomie)
    {
       $this->_autonomie = $autonomie;
    }

    public function getInfos()
    {
        // Apelle la méthode getInfos() de la classe Voiture
        return parent::getInfos() . "</br>Autonomie : " . $this->getAutonomie();
    }
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo "</br>";
echo $ve1->getInfos()."<br/>";
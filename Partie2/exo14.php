<h1>Exercice 14</h1>

<p>Creer une classe Voiture possedant 2 proprietes (marque et modele) ainsi qu’une classe VoitureElec qui herite (extends) de la classe Voiture et qui a une propriete supplementaire (autonomie).</br>
Instancier une voiture « classique » et une voiture « electrique » ayant les caracteristiques suivantes :</br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");</br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);</br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :</br>
echo $v1->getInfos()."&ltbr/>";</br>
echo $ve1->getInfos()."&ltbr/>";</p>

<h2>Resultat</h2>

<?php

Class Voiture
{
    // Visibilite protected pour pouvoir acceder a ces attributs depuis une classe qui extends celle-çi
    protected string $_marque;
    protected string $_modele;

    function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function setModele($modele)
    {
       $this->_modele = $modele;
    }

    public function getInfos()
    {
        return "Marque : " . $this->getMarque() . "</br>
        Modele : " .$this->getModele();
    }
}

// extends pour heriter des attributs et methodes d'une autre classe (Ici Voiture)
Class VoitureElec extends Voiture
{
    private int $_autonomie;

    function __construct(string $marque, string $modele, int $autonomie)
    {
        // Apelle le constructeur de la classe parent (Voiture)
        parent::__construct($marque, $modele);
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
        // Apelle la methode getInfos() de la classe Voiture
        return parent::getInfos() . "</br>Autonomie : " . $this->getAutonomie();
    }
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo "</br>";
echo $ve1->getInfos()."<br/>";
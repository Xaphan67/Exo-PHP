<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</br>
v1 ➔ "Peugeot","408",5</br>
v2 ➔ "Citroën","C4",3</br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants :</br>
Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.</p>

<h2>Résultat</h2>

<?php

Class Voiture
{
    private string $_marque;
    private string $_modèle;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_démarré; //Status du véhicule. Vrai si sa vitesse n'est pas nulle

    function __construct(string $marque, string $modèle, int $nbPortes)
    {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_démarré = false;
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
        $this->modèle = $modèle;
    }

    public function getNbPortes()
    {
        return $this->_nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }

    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function getDémarré()
    {
        return $this->_démarré;
    }

    public function setDémarré($démarré)
    {
        $this->_démarré = $démarré;
    }

    // Démarre le véhicule
    public function démarrer()
    {
        $this->setDémarré(true);
        return "Le véhicule " . $this->getMarque() . " " . $this->getModèle() . " démarre</br>";
    }

    // Augmente la vitesse du véhicule s'il à démarré
    public function accelérer(int $vitesse)
    {
        if ($this->getDémarré())
        {
            $this->setVitesseActuelle($vitesse);
            return "Le véhicule " . $this->getMarque() . " " . $this->getModèle() . " accelère de " . $this->getVitesseActuelle() . " km / h</br>";     
        }
        else
        {
            return "Le véhicule " . $this->getMarque() . " " . $this->getModèle() . " veut accelérer de " . $vitesse . "</br>Pour accélerer, il faut démarrer le véhicule " . $this->getMarque() . " " . $this->getModèle() . " !</br>"; 
        }
    }

    //ralentit le véhicule s'il à démarré
    public function ralentir(int $vitesse)
    {
        if ($this->getDémarré())
        {
            //Si le véhule ralentit d'avantage que sa vitesse actuelle, il est arreté
            if ($vitesse < $this->getVitesseActuelle())
            {
                $this->setVitesseActuelle($this->getVitesseActuelle() - $vitesse);
                return "Le véhicule " . $this->getMarque() . " " . $this->getModèle() . " ralentit de " . $vitesse . " km / h</br>
                Sa vitesse est maintenant de " . $this->getVitesseActuelle() . " km / h</br>"; 
            }
            else
            {
                $this->stopper();
            }
        }
        else
        {
            return "Le véhicule " . $this->getMarque() . " " . $this->getModèle() . " veut ralentir de " . $vitesse . " km / h</br>Pour ralentir, il faut démarrer le véhicule " . $this->getMarque() . " " . $this->getModèle() . " !</br>";
        }
    }

    // Stope le véhicule
    public function stopper()
    {
        $this->setDémarré(false);
        $this->setVitesseActuelle(0);
        return "Le véhicule " . $this->getMarque() . " " . $this->getModèle() . " est stoppé"; 
    }

    // Retourne l'état de la vitesse actuelle du véhicule
    public function état()
    {
        return "La vitesse du véhicule " . $this->getMarque() . " " . $this->getModèle() . " est de" . $this->getVitesseActuelle() . " km / h</br>";
    }

    // Retourne un résumé du véhicule
    public function infos()
    {
        $display_état = $this->_démarré ? "démarré" : "à l'arrêt";
        return "Nom et modèle du véhicule : " . $this->getMarque() . " " . $this->getModèle() . "</br>
        Nombres de portes : " . $this->getNbPortes() . "</br>
        Le véhicule " . $this->getMarque() . " est $display_état </br>
        Sa vitesse actuelle est de : " . $this->getVitesseActuelle() . " km / h</br></br>";
    }
}

$voiture1 = new Voiture("Peugeot","408",5);
$voiture2 = new Voiture("Citroën","C4",3);

echo $voiture1->démarrer();
echo $voiture1->accelérer(50);
echo $voiture2->démarrer();
echo $voiture2->stopper();
echo $voiture2->accelérer(20);
echo $voiture1->état();
echo $voiture2->état();

echo "</br>";

echo $voiture1->infos();
echo $voiture2->infos();

echo "Bonus :</br>";

echo $voiture1->ralentir(20);
echo $voiture2->ralentir(40);
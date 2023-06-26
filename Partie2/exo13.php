<h1>Exercice 13</h1>

<p>Creer une classe Voiture possedant les proprietes suivantes : marque, modele, nbPortes et vitesseActuelle ainsi que les methodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque vehicule instancie est de 0. Une methode personnalisee pourra afficher toutes les informations d’un
vehicule.</br>
v1 ➔ "Peugeot","408",5</br>
v2 ➔ "Citroën","C4",3</br>
Coder l’ensemble des methodes, accesseurs et mutateurs de la classe tout en realisant des jeux de tests pour verifier la coherence de la classe Voiture. Vous devez afficher les tests et les elements suivants :</br>
Bonus : ajouter une methode ralentir(vitesse) dans la classe Voiture.</p>

<h2>Resultat</h2>

<?php

Class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_demarre; //Status du vehicule. Vrai si sa vitesse n'est pas nulle

    function __construct(string $marque, string $modele, int $nbPortes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_demarre = false;
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
        $this->modele = $modele;
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

    public function getDemarre()
    {
        return $this->_demarre;
    }

    public function setDemarre($demarre)
    {
        $this->_demarre = $demarre;
    }

    // Demarre le vehicule
    public function demarrer() : string
    {
        $this->setDemarre(true);
        return "Le vehicule " . $this->getMarque() . " " . $this->getModele() . " demarre</br>";
    }

    // Augmente la vitesse du vehicule s'il à demarre
    public function accelerer(int $vitesse) : string
    {
        if ($this->getDemarre())
        {
            $this->setVitesseActuelle($vitesse);
            return "Le vehicule " . $this->getMarque() . " " . $this->getModele() . " accelere de " . $this->getVitesseActuelle() . " km / h</br>";     
        }
        else
        {
            return "Le vehicule " . $this->getMarque() . " " . $this->getModele() . " veut accelerer de " . $vitesse . "</br>Pour accelerer, il faut demarrer le vehicule " . $this->getMarque() . " " . $this->getModele() . " !</br>"; 
        }
    }

    //ralentit le vehicule s'il à demarre
    public function ralentir(int $vitesse) : string
    {
        if ($this->getDemarre())
        {
            //Si le vehule ralentit d'avantage que sa vitesse actuelle, il est arrete
            if ($vitesse < $this->getVitesseActuelle())
            {
                $this->setVitesseActuelle($this->getVitesseActuelle() - $vitesse);
                return "Le vehicule " . $this->getMarque() . " " . $this->getModele() . " ralentit de " . $vitesse . " km / h</br>
                Sa vitesse est maintenant de " . $this->getVitesseActuelle() . " km / h</br>"; 
            }
            else
            {
                $this->stopper();
            }
        }
        else
        {
            return "Le vehicule " . $this->getMarque() . " " . $this->getModele() . " veut ralentir de " . $vitesse . " km / h</br>Pour ralentir, il faut demarrer le vehicule " . $this->getMarque() . " " . $this->getModele() . " !</br>";
        }
    }

    // Stope le vehicule
    public function stopper() : string
    {
        $this->setDemarre(false);
        $this->setVitesseActuelle(0);
        return "Le vehicule " . $this->getMarque() . " " . $this->getModele() . " est stoppe"; 
    }

    // Retourne l'etat de la vitesse actuelle du vehicule
    public function etat() : string
    {
        return "La vitesse du vehicule " . $this->getMarque() . " " . $this->getModele() . " est de" . $this->getVitesseActuelle() . " km / h</br>";
    }

    // Retourne un resume du vehicule
    public function infos() : string
    {
        $display_etat = $this->_demarre ? "demarre" : "à l'arrêt";
        return "Nom et modele du vehicule : " . $this->getMarque() . " " . $this->getModele() . "</br>
        Nombres de portes : " . $this->getNbPortes() . "</br>
        Le vehicule " . $this->getMarque() . " est $display_etat </br>
        Sa vitesse actuelle est de : " . $this->getVitesseActuelle() . " km / h</br></br>";
    }
}

// Declaration des classes
$voiture1 = new Voiture("Peugeot","408",5);
$voiture2 = new Voiture("Citroën","C4",3);

echo $voiture1->demarrer();
echo $voiture1->accelerer(50);
echo $voiture2->demarrer();
echo $voiture2->stopper();
echo $voiture2->accelerer(20);
echo $voiture1->etat();
echo $voiture2->etat();

echo "</br>";

echo $voiture1->infos();
echo $voiture2->infos();

echo "Bonus :</br>";

echo $voiture1->ralentir(20);
echo $voiture2->ralentir(40);
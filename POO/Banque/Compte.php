<?php

class Compte
{
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, string $devise, Titulaire $titulaire)
    {
        $this->_libelle = $libelle;
        $this->_solde = 0;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;

        // Associe le compte au titulaire
        $this->_titulaire->ajouterCompte($this);
    }

    public function getLibelle()
    {
        return $this->_libelle;
    }

    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
    }

    public function getSolde()
    {
        return $this->_solde;
    }

    public function setSolde($solde)
    {
        $this->_solde = $solde;
    }

    public function getDevise()
    {
        return $this->_devise;
    }

    public function setDevise($devise)
    {
        $this->_devise = $devise;
    }

    public function getTitulaire()
    {
        return $this->_titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->_titulaire = $titulaire;
    }

    public function __toString()
    {
        return $this->getLibelle() . " de " . $this->getTitulaire()->getNom() . " " . $this->getTitulaire()->getPrenom();
    }

    // Crédite le compte d'un montant spécifié 
    public function crediterCompte(float $montant)
    {
        $this->_solde += $montant;
        return "Le $this à été crédité de $montant " . $this->_devise . "</br>";
    }

    // Débite le compte d'un montant spécifié 
    public function débiterCompte(float $montant)
    {
        $this->_solde -= $montant;
        return "Le $this à été débité de $montant " . $this->_devise . "</br>";
    }

    // Effectue un virement vers un autre compte
    public function effectuerVirement(float $montant, Compte $compteDestinataire)
    {
        $this->débiterCompte($montant); // Débite le compte actuel
        $compteDestinataire->crediterCompte($montant); // Crédite le compte qui reçoit le montant
        return "$montant " . $this->_devise .  " transférés depuis le $this vers le $compteDestinataire";
    }

    // Affiche les informations du compte
    public function afficherInformations()
    {
        return "<h2>$this</h2>" . "Solde : " . $this->getSolde() . " " . $this->getDevise() . "</br>";
    }
}
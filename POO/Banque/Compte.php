<?php

class Compte
{
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire)
    {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
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
        return $this->getLibelle() . " de " . $this->getTitulaire()->getNom() . " " . $this->getTitulaire()->getPrenom() . " - Solde : " . $this->getSolde() . " " . $this->getDevise();
    }

    // Crédite le compte d'un montant spécifié 
    public function crediterCompte(float $montant, string $devise)
    {

    }

    // Débite le compte d'un montant spécifié 
    public function débiterCompte(float $montant, string $devise)
    {
        
    }

    // Effectue un virement vers un autre compte
    public function effectuerVirement(float $montant, string $devise, Compte $compte)
    {

    }
}
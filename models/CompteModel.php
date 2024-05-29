<?php

class Compte extends Model {
    private int $idc;
    private string $numero;
    private float $solde;
    private string $dateCrea;
    private float $taux;
    private float $frais;
    private string $etat;

    public function __construct(){
        $this->table="compte";
        $this->class="Compte";
    }

    
    public function save(){
        $SQL_INSERT="INSERT INTO compte (numero, solde, dateCrea, taux, frais, etat) 
        VALUES ('$this->numero','$this->solde','$this->dateCrea','$this->taux','$this->frais','$this->etat')";
        $result = $this->openConnexion()->exec($SQL_INSERT); 
    }

 
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

   
    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateCrea()
    {
        return $this->dateCrea;
    }

 
    public function setDateCrea($dateCrea)
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

 
    public function getTaux()
    {
        return $this->taux;
    }

  
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

  
    public function getFrais()
    {
        return $this->frais;
    }

   
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

   
    public function getEtat()
    {
        return $this->etat;
    }

   
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}
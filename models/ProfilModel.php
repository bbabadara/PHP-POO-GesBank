<?php

class Profil extends Model{
    private int $idp;
    private string $libp;

    public function __construct(){
        $this->table= "profil";
        $this->class= "Profil";
    }

    public function save(){
        $SQL_INSERT="INSERT INTO profil (libp) VALUES ('$this->libp')";
        $result = $this->openConnexion()->exec($SQL_INSERT); 
    }

    public function getIdp()
    {
        return $this->idp;
    }


    public function setIdp($idp)
    {
        $this->idp = $idp;

        return $this;
    }

   
    public function getLibp()
    {
        return $this->libp;
    }

    
    public function setLibp($libp)
    {
        $this->libp = $libp;

        return $this;
    }

   
}
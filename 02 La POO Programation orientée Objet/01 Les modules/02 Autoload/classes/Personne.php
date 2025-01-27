<?php
namespace Classes;

class Personne{
    private String $nom;
    private String $prenom;
    public function __construct(String $nom,String $prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
    }
}
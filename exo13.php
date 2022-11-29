<?php

class voiture{
    private string $_marque;
    private $_modele;
    private int $_nBPortes;
    private $_vitesseActuelle;
    private $_Demarrer;

    function __construct(string $marque,$modele,int $porte){;
    $this->_marque = $marque;
    $this->_modèle = $modele;
    $this->_nBPortes = $porte;
    $this->_vitesseActuelle = 0;
    $this->_Demarrer = true;
    }
    public function getMarque():string{
    return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque ;
        return $this;
    }
    public function getModele():string{
        return $this->_modele;
    }
    public function setModele(string $modele){
        $this->_modèle = $modele ;
        return $this;
    }
    public function getPorte():int{
        return $this->_nBPortes;
    }
    public function setPorte(int $porte){
        $this->_nBPortes = $porte ;
        return $this;
    }
    public function getVitesse(){
        return $this->_vitesseActuelle;
    }
    public function setVitesse(){
        $this->_vitesseActuelle = 0;
        return $this;
    }
    public function getDemarrer(){
        return $this->_Demarrer;
    }
    public function setDemarrer(){
        $this->_Demarrer = true;
        return $this;
    }





















}


?>
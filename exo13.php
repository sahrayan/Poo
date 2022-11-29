<?php

class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nBPortes;
    private float $_vitesseActuelle;
    private $_statut;

    function __construct(string $marque,string $modele,int $porte,float $VitesseActuelle,$statut){;
    $this->_marque = $marque;
    $this->_modele = $modele;
    $this->_nBPortes = $porte;
    $this->_vitesseActuelle = $VitesseActuelle;
    $this->_statut = $statut;




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



    public function getVitesse():float{
        return $this->_vitesseActuelle;
    }
    public function setVitesse($vitesse){
        $this->_vitesseActuelle = $vitesse;
        echo $this. " prend la vitesse de ".$vitesse. "km/h";
    }

    public function __toString()
    {
        return $this->_marque." ".$this->_modele ;
    }

    public function getStatut(){
        return $this->_statut;
    }
    public function setStatut(){
        $this->_statut = true;
        return "le vehicule demarre";
    }




    public function verifieStatut(){
        if($this->_statut = 0){
        echo "le vehicule " . $this->_marque. " ".$this->_modele. " n est pas demarrer<br>";
        }elseif ($this->_statut = 1){
            echo "le vehicule " .$this->_marque. " ".$this->_modele. " est demarrer<br>";
        }
    
    }
    



}


?>
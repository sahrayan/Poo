<?php

class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nBPortes;
    private float $_vitesseActuelle;
    private $_statut;

    function __construct(string $marque,string $modele,int $porte,float $VitesseActuelle, int $statut)
    {
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
    public function setVitesse( float $VitesseActuelle){
        if ($this->_vitesseActuelle > 0 && $this-> _vitesseActuelle <= 120){
        }elseif ($this -> _vitesseActuelle  > 120){
            echo "le vehicule dépasse la vitesse limite qui est de 120 km/h";
        }
        
       
    }

    public function __toString()
    {
        return $this->_marque." ".$this->_modele ;
    }

    public function getStatut(){
        return $this->_statut;
    }
    public function setStatut($pipi)
    {
        $this->_statut = $pipi;
        return "Le vehicule demarré";
    }




    public function verifieStatut(){
        if($this->_statut === 0){
            
        echo "Le vehicule " . $this->_marque. " ".$this->_modele. " n est pas demarré<br>";
        }elseif ($this->_statut === 1){
            echo "Le vehicule " .$this->_marque. " ".$this->_modele. " est demarré<br>";
        }
    
    }
    public function Demarrer(){
        if($this->_statut===0){
        $this->_statut = 1;
        echo "La voiture demarre et peux avancer";
        }elseif ($this ->_statut === 1){
            $this->_statut = 0;
            echo " La voiture va étre a l'arrét";
        }
    }
    public 



    // public function verifieVitesse(){
    //     if ($this ->_vitesseActuelle > 0 && $this-> _vitesseActuelle  <= 120 ){
    //         echo "<br> le vehicule va a " .$this-> _vitesseActuelle  . " km/h ";
    //     }elseif ($this -> _vitesseActuelle  > 120){
    //         echo "le vehicule dépasse la vitesse limite qui est de 120 km/h";
    //     }
    // }
    

}


?>
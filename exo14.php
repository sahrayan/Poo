<?php
class Voiture{
    private string $_marque;
    private string $_modele;

    function __construct(string $marque,string $modele,){
        $this->_marque = $marque;
        $this->_modele = $modele;
    }
    public function getMarque():string{
    return $this->_marque;
    }
    public function setMarque(string $marque){
        $this->_marque = $marque ;
        return $this->_marque;
    }
    public function getModele():string{
    return $this->_modele;
    }
    public function setModele(string $modele){
    $this->_modele = $modele ;
    return $this->_modele;
    }
}
class VoitureElec extends Voiture{
    private string $_autonomie

    function __construct(string $marque, string $modele, int $_autonomie){
    $this->_autonomie = $autonomie;
    parent::__construct($marque, $modele);
    }
    public function getAutonomie():int{
    return $this ->_autonomie;
    }
    public function setAutonomie(int $autonomie){
    $this->_autonomie = $autonomie;
    return $this->_autonomie;
    }

    public function Info($auto)
    if($this->getAutonomie()==1){
        $this->setAutonomie($this->getAutonomie());
        echo "la voiture a " .$auto. " % d'autonomie.";
    }



}
?>
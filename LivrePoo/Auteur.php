<?php
class Auteur{
    private string $_nom;
    private string $_prenom;
    private array $_livres;

    function __construct(string $nom, string $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    public function addLivre($livre){
        $this->_livres[]=$livre;
    }
    public function getNom():string{
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom = $nom ;
        return $this;   
    }
    public function getPrenom():string{
        return $this->_prenom;
    }
    public function setPrenom(string $prenom){
        $this->_prenom = $prenom ;
        return $this;   
    }
    public function __toString()
    {
        return $this->getNom() .$this->getPrenom(). ". <br>";
    }
    public function afficherBibliographie(){
        echo "Livres de ". $this . "<br>";
        foreach($this->_livres as $livre){
            echo $livre ."<br>";
     }
    }
    
}
?>
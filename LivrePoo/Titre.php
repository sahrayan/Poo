<?php
class Titre{
    private string $_titre;
    function __construct(string $titre){
    $this->_titre = $titre;
    }
    public function getTitre():string{
    return $this->_titre;
    }
    public function setTitre(string $titre){
    $this->_titre = $titre ;
    return $this;   
    }
}
?>
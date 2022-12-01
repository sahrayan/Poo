<h1>Livre de Stephen King</h1>
<?php


class Livre{
    private string $_titre;
    private int $_annee;
    private int $_page;
    private int $_prix;

    function __construct(string $titre, int $annee, int $page, int $prix,){
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_page = $page;
        $this->_prix = $prix;
    }
    public function getTitre():string{
        return $this->_titre;
    }
    public function setTitre(string $titre){
        $this->_titre = $titre ;
        return $this;   
    }
    public function getAnnee():int{
        return $this->_annee;
    }
    public function setAnnee(int $annee){
        $this->_annee = $annee ;
        return $this;
    }
    public function getPage():int{
        return $this->_page;
    }
    public function setPage(int $modele){
        $this->_page = $page ;
        return $this;
    }
    public function getPrix():int{
        return $this->_prix;
    }
    public function setPrix(int $prix){
        $this->_prix = $prix ;
        return $this;
    }
    public function Ouvrage(){
        echo .$this->_titre. "(" .$this->_annee. ") :" .$this->_page. "pages /" .$this->_prix. "€<br>";
    }


}
class 

?>
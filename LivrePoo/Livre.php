<h1>Livre de Stephen King</h1>
<?php


class Livre{
    private string $_titre;
    private int $_annee;
    private int $_page;
    private int $_prix;
    private Auteur $_auteur;

    function __construct(string $titre, int $annee, int $page, int $prix , Auteur $auteur){
        $this->_titre = $titre;
        $this->_annee = $annee;
        $this->_page = $page;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addLivre($this);
        
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
    public function setPage(int $page){
        $this->_page = $page;
        return $this;
    }
    public function getPrix():int{
        return $this->_prix;
    }
    public function setPrix(int $prix){
        $this->_prix = $prix ;
        return $this;
    }
    public function getAuteur():Auteur{
        return $this->_auteur;
    }
    public function setAuteur(Auteur $auteur){
        $this->_auteur = $auteur ;
        return $this;
    }

    public function __toString()
    {
        return $this->getTitre()." (". $this->getAnnee().")"." : ". $this->getPage()." pages / ". $this->getPrix()."€";
    }

}


?>
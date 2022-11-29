<h1>Exercice 15 PHP 1</h1>
<?php

class Personne {


    private $_name;

    private $_fname;

    private $_birthday;


    public function __construct($name,$fname,$bday) {

        $this->_name = $name;

        $this->_fname = $fname;

        $this->_birthday = $bday;

    }



    public function getName(){

        return $this->_name;

    }

    public function getFirstName(){

        return $this->_fname;

    }
    public function getBirthDay(){

        return $this->_birthday;

    }
    
    public function setName($name){

        $this->_name=$name;

    }
    public function setFirstName($name){

        $this->_fname=$fname;

    }
    public function setBirthDay($name){

        $this->_birthday=$bday;

    }
    private function calcAge(){ 
    
        $today=date_create();
        $bd=$this->getBirthDay();
        $bd=date_create($bd);
            
        $age= date_diff($bd,$today);

        return $age;
    }
    public function displayUser () {

        $age = $this->calcAge();

        echo $this->getFirstName() ." ". $this->getName() ." a " .$age->y. " ans<br>";

    }
};
$p1 = new Personne("DUPONT","Rayan","2004-01-27");
$p2 = new Personne("Loukili","Jawad","1967-01-02");

$p1->setName("Raihani");

$p1->displayUser();

?>
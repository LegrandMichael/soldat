<?php 

class Soldat {

    private $matricule;
    private $taille;
    private $age;
    private $esperanceVie;

    public function __construct(){
            $this->setMatricule(rand());
            $this->setTaille(rand(15,25)/10.);
            $this->setAge(rand(18,35));
            $this->setEsperanceVie(rand(1,29));
    }

    public function setMatricule($matricule){
        $this->matricule=$matricule;
    }

    public function getMatricule(){
        return $this->matricule;
    }

    public function setTaille($taille){
        $this->taille=$taille;
    }

    public function getTaille(){
        return $this->taille;
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function getAge(){
        return $this->age;
    }

    public function setEsperanceVie($esperanceVie){
        $this->esperanceVie=$esperanceVie;
    }

    public function getEsperanceVie(){
        return $this->esperanceVie;
    }

}
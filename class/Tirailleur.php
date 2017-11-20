<?php 

class Tirailleur extends Soldat {

    private $armes = ["pistolet","fusil","mitraillette"];
    private $arme;


    public function __construct() {
        parent::__construct();
        $this->setArmeChoisi();
    }

    public function setArmeChoisi(){
        $armeChoisi=array_rand($this->armes,1);
        $this->arme=$this->armes[$armeChoisi];
    }

    public function getArmeChoisi(){
        
    }


}
<?php

/**
 * Class Commande
 * @Author TGC
 */


class Copmmande {
    
    
    private $_codeC;
    
    private $_dateC;
    
    private $_statuC;
    
    private $_dateretraitC;
    
    private $_heureretraitC;
    
    private $_code;
    
       // Function d'hydratation

    public function hydrate(array $donnees) {

        foreach ($donnees as $key => $value) {

            // On récupère le nom du setter correspondant à l'attribut.

            $method = 'set' . ucfirst($key);


            // Si le setter correspondant existe.

            if (method_exists($this, $method)) {

                // On appelle le setter.

                $this->$method($value);
            }
        }
    }

    //Constructeur
    public function __construct(array $donnees) {
        
        $this->hydrate($donnees);
        
    }
    
    
    
    //Getters
    public function codeC() {
        return $this->_codeC;
    }

    public function dateC() {
        return $this->_dateC;
    }

    public function statuC() {
        return $this->_statuC;
    }

    public function dateretraitC() {
        return $this->_dateretraitC;
    }

    public function heureretraitC() {
        return $this->_heureretraitC;
    }

    public function code() {
        return $this->_code;
    }
    
    //Setters

    public function setCodeC($codeC) {
        $this->_codeC = $codeC;
    }

    public function setDateC($dateC) {
        $this->_dateC = $dateC;
    }

    public function setStatuC($statuC) {
        $this->_statuC = $statuC;
    }

    public function setDateretraitC($dateretraitC) {
        $this->_dateretraitC = $dateretraitC;
    }

    public function setHeureretraitC($heureretraitC) {
        $this->_heureretraitC = $heureretraitC;
    }

    public function setCode($code) {
        $this->_code = $code;
    }


    
    
    
    
    
}
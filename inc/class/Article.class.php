<?php

/**
 * Class Article
 * @Author TGC
 */


class Article {
    
    
    private $_codeA;
    
    private $_libelleA;
    
    private $_descriptionA;
    
    private $_qtestockA;
    
    private $_prixhtA;
    
    private $_photoA;
    
    private $_label;
    
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
    
    public function codeA() {
        return $this->_codeA;
    }

    public function libelleA() {
        return $this->_libelleA;
    }

    public function descriptionA() {
        return $this->_descriptionA;
    }

    public function qtestockA() {
        return $this->_qtestockA;
    }

    public function prixhtA() {
        return $this->_prixhtA;
    }

    public function photoA() {
        return $this->_photoA;
    }

    public function label() {
        return $this->_label;
    }

    public function ode() {
        return $this->_code;
    }
    
    
    
    //Setters

    public function setCodeA($codeA) {
        $this->_codeA = $codeA;
    }

    public function setLibelleA($libelleA) {
        $this->_libelleA = $libelleA;
    }

    public function setDescriptionA($descriptionA) {
        $this->_descriptionA = $descriptionA;
    }

    public function setQtestockA($qtestockA) {
        $this->_qtestockA = $qtestockA;
    }

    public function setPrixhtA($prixhtA) {
        $this->_prixhtA = $prixhtA;
    }

    public function setPhotoA($photoA) {
        $this->_photoA = $photoA;
    }

    public function setLabel($label) {
        $this->_label = $label;
    }

    public function setCode($code) {
        $this->_code = $code;
    }


}


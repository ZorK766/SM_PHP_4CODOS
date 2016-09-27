<?php

//Fonction Autoloader de classes
function class_autoloader($class) {  //Verifier d abord si exist
    $file = "inc/class/$class.class.php";
    
    if (file_exists($file)) {
    
    require_once $file;
    
    } else {
        echo "La classe $file n/'existe pas";
    }
}

//Fonction pour convertir une date Fr en date us
function changedatefrus($dateFr) {

    $tblDate = explode('/', $dateFr);


    $jj = sprintf('%02s', $tblDate[0]);
    $mm = sprintf('%02s', $tblDate[1]);
    $yyyy = $tblDate[2];

    return $yyyy . '-' . $mm . '-' . $jj;
}

// Fonction qui convertit le HT en TTC
function conversionHT() {
	
	
}


// Fonction qui formate le prix en Euros avec la virgule et mettre 2 chiffres après la virgule ex 4.3 -> 4€30
function formatPrice($number) {
    
    $fmt = numfmt_create( 'fr_FR', NumberFormatter::CURRENCY );
       
    return $fmt;
	
	
	
}
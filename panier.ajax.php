<?php

require_once 'inc/config.php';

if (isset($_POST['qte'])) {
        
    $lignecommande = $_POST;
    CommandeManager::add($lignecommande);
    CommandeManager::getpanier();
}

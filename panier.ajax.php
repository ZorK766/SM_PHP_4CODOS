<?php
require_once 'inc/config.php';

//On vérifie si un on vient bien du formulaire
if (isset($_POST['qte'])) {
        
    $lignecommande = $_POST;
    //On enregistre les articles commandés dans la base de donnée
    CommandeManager::add($lignecommande);
    //On affiche le panier pour transmettre les data
    CommandeManager::getpanier();
}

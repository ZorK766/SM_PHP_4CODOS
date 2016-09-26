<?php

require_once 'inc/class/config.php';

if(isset($_POST['id_article']))
{
    echo 'ok';
}

$panier_manager = new CommandeManager();

$panier_manager->add();


        
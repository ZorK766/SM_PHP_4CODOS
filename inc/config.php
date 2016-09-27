<?php

//Variable d'adresse du site
$http = "http://localhost:8080/SM_PHP_4CODOS/";

//Variables de la base de données
define("_DB_HOST", "localhost");
define("_DB_USER", "root");
define("_DB_PASS", "");
define("_DB_NAME", "speedymarket_php");

//Variable de nom du cookie
define("_COOKIE_NAME", "SpeedyM");
//Variable de durée de validitée du cookie
define("_COOKIE_TIME", time() + 60 * 60 * 24 * 7); //ici 1 semaine ou 604 800 secondes

//Taux de TVA
define("_TVA_20", 1.2);


//Appel des functions perso
Require_once ("/inc/functions.php");

//Autoloader de Classes
spl_autoload_register('class_autoloader');

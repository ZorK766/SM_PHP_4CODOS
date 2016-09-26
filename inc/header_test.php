<?php require_once 'config.php'; ?>  

<?php ob_start()?>

<!DOCTYPE html>
<html lang="">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Les feuilles de style -->
        <link rel="stylesheet" href="css/normalize.css" type="text/css"/>
        <link rel="stylesheet" href="js/vegas/vegas.min.css">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <!-- La google font utilisée dans le site -->
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

        <!-- Balise permettant la non indexation du site par les moteurs de recherche pour la phase de production-->
        <meta name="robots" content="noindex">

        <!-- Balises pour les moteurs de recherche -->
        <meta name="description" content="Les meilleurs produits locaux, directement du producteur à votre coffre" />
        <meta name="keywords" content="Produits locaux, drive, bearn, prodcteurs, qualité, fraicheur, proximité, bio, rapidité, courses en ligne, pau" />
        <meta name="author" content="TGC" />

        <!-- La favicon du site -->
        <link rel="shortcut icon" href="img/favicon.png">

        <!-- Le titre de la page -->
        <title>Speedy Market - Drive</title>

    </head>

    <! ---------------------------------------------------------------------------------------------------------------------------------------- -->

    <body>

        <!-- Le header -->
        <header class="row">               

            <!-- Le logo --> 
            <div id="logo" class="col-lg-3">
                <a href="#"><img src="img/logo.png" alt="Logo Speedy Market"/></a>
            </div>


            <!-- La barre de recherche -->    
            <div id="search_bar" class="col-lg-4 col-lg-offset-1">
                <input type="text" autofocus="" value="" placeholder=" Rechercher: ex: Canard, Citrouille, Courgettes" style="border:solid 1px steelblue; color:steelblue;" />
                <!-- Le slogan -->
                <span id="slogan">Les meilleurs produits locaux,<br/>du producteur à votre coffre</span>
            </div>

            
            <div class ="col-lg-2 col-lg-offset-1 connect">
                <form method="post" action="#">
                    <div class ='row'>
                    <label for="login" class='login'>Indentifiant</label>
                    <input type='text' name='login' id='login' class='login_input'>
                    </div>
                    <div class ='row'>
                    <label for='password' class='password'>Mot de passe</label>
                    <input type='password' id='password' name='password' class='login_password'>
                    </div>
                    <div class ='row'>
                    <a href="#" class='register'><!--<img src="img/header_icon_register.png" alt="register"/><br/>-->Inscription</a>
                    <input type='submit' value='Se connecter' class='login_submit'>
                    </div>
                </form>
            </div>
            
            <!--
            <div class="col-lg-1 header_icons">
                <img src="img/header_icon_search.png" alt="search"/><br>Rechercher
            </div>
            <div class="col-lg-1 header_icons">
                <a href="#"><img src="img/header_icon_profile.png" alt="profile"/><br/>Mon Compte</a> 
            </div>
            <div class="col-lg-1 header_icons">
                <a href="#"><img src="img/header_icon_register.png" alt="register"/><br/>Inscription</a> 
            </div>
            <div class="col-lg-1 header_icons">
                <a href="#"><img src="img/header_icon_cart.png" alt="cart"/></br>Mon Panier</a> 
            </div>-->

        </header>



        <!-- Le menu scroll ( Caché au début, il s'affiche lorsque qu l'on est en dessous de la page d'acceuil -->
        <div class="menu_scroll">        
            <div id="logo" class="col-lg-3">
                <a href="#"><img src="img/logo.png" alt="Logo Speedy Market"/></a>
            </div>

            <div id="search_bar" class="col-lg-4 col-lg-offset-1">
                <input type="text" autofocus="" value="" placeholder=" Rechercher: ex: Canard, Citrouille, Courgettes" style="border:solid 1px steelblue; color:steelblue;" />
                <span id="slogan">Les meilleurs produits locaux,<br/>du producteur à votre coffre</span>
            </div>

            <div class="col-lg-1 header_icons">
                <img src="img/header_icon_search.png" alt="search"/><br>Rechercher
            </div>
            <div class="col-lg-1 header_icons">
                <a href="#"><img src="img/header_icon_profile.png" alt="profile"/><br/>Mon Compte</a> 
            </div>
            <div class="col-lg-1 header_icons">
                <a href="#"><img src="img/header_icon_register.png" alt="register"/><br/>Inscription</a> 
            </div>
            <div class="col-lg-1 header_icons">
                <a href="#"><img src="img/header_icon_cart.png" alt="cart"/></br>Mon Panier</a> 
            </div>
        </div>






        <!-- La div contenant le slider de la page d'acceuil -->
        <div id="homeslider"></div>

        <!-- Le label (le rond avec 100% au milieu de la page d'acceuil -->
        <div id="label">
            <ul>
                <li class="firstanimation">
                    <img src="img/proximite.png" alt="100% PROXIMITE"/>
                </li>
                <li class="secondanimation">
                    <img src="img/qualite.png" alt=""/>
                </li>
                <li class="thirdanimation">
                    <img src="img/rapidite.png" alt=""/>
                </li>
            </ul>
        </div>



        <!-- La div Panier -->
        <div id="panier">
            <div id="panier_ico" class="show2"><img src="img/header_icon_cart.png">Mon Panier</div>
            <div id="panier_content">5 Articles<br/>5,30€</div>
        </div>


        <!-- La obx "Je fais mes courses en lignes -->
        <div id="courses_container">
            <div id="je_fais_mes_courses" >
                <a class="smoothScroll" href="#wrapper">JE FAIS MES COURSES EN LIGNE</a>            
            </div>
            <!-- La fléche qui rebondit juste en dessous -->
            <a href="#wrapper"><div class="arrow bounce"></div></a>
        </div>

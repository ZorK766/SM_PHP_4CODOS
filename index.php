<?php require_once 'inc/header.php'; ?>  








<div id="wrapper">

    <div id="page_produits">

        <div id="produits">
            <div class="page_title">
                <img src="img/feuille_l.png" alt=""/><h2>NOS PRODUITS</h2><img src="img/feuille_r.png" alt=""/>
            </div>
            <ul>
                <li>
                    <a href="?cat=VIAPOI_VIA"><img src="img/png64/0306-meat_64.png" alt=""/><p>Viandes & Poissons</p></a>                    

                </li>
                <li>
                    <a href="?cat=FRULEG_FRU"><img src="img/png64/0104-watermelons_64.png" alt=""/><p>Fruits & Légumes</p></a>  
                </li>
                <li>
                    <a href="?cat=VIAPOI_POI"><img src="img/png64/0605-rice-chopsticks_64.png" alt=""/><p>Produits secs</p></a>  
                </li>
                <li>
                    <a href="?cat=BOISSO_NON"><img src="img/png64/0506-cheese-wedge_64.png" alt=""/><p>Produits laitiers</p></a>  
                </li>
                <li>
                    <a href="?cat=CONBOC_BOC"><img src="img/png64/0105-preserved-food_64.png" alt=""/><p>Conserves & Bocaux</p></a>  
                </li>
                <li>
                    <a href="?cat=CONBOC_CON"><img src="img/png64/0106-ginger_64.png" alt=""/><p>Epicerie Salée</p></a>  

                </li>
                <li>
                    <a href="?cat=FRULEG_LEG"><img src="img/png64/0206-gingerbread-man_64.png" alt=""/><p>Epicerie Sucrée</p></a>  

                </li>
                <li>
                    <a href="?cat=BOISSO_ALC"><img src="img/png64/0305-wine_64.png" alt=""/><p>Vins & Boissons</p></a>  

                </li>
            </ul>
            <img src="img/separator_o.png" alt=""/>


        </div>

        <div id="container">

            <div class="grid_list">
                <ul>
                    <li><a href="#"><img src="img/grid.png" alt=""/></a></li>
                    <li><a href="#"><img src="img/list.png" alt=""/></a></li>                                         
                </ul>
            </div>





            <?php /*
              <!-- exemple d'article -->
              <article>
              <div class='row'>
              <!-- PRODUIT PARTIE GAUCHE -->
              <div class='col-lg-4 tal'>
              <img src="img/produits/kiwis.png" alt=""/>
              <div class='nom_produit'>Titre produit</div>
              </div>
              <!-- PRODUIT PARTIE CENTRALE -->
              <div class='col-lg-4 tal'>
              <img class='panier' src="img/panier.png" alt=""/>
              <div class="price">Prix Unitaire: 3€45</div>
              <form method="post" action="#">
              <label for="quantite" class="quantite">Quantité</label>
              <select name="quantite" id="qauntite" class="quantite">
              <option value ="1">1</option>
              <option value ="2">2</option>
              <option value ="3">3</option>
              <option value ="4">4</option>
              </select>
              <button type='submit' class='ajouter_panier'>Ajouter au panier</button>
              </form>
              <div class='origine'>Origine: Sault de Navailles</div>
              </div>
              <!-- PRODUIT PARTIE DROITE -->
              <div class='col-lg-4 tal'>
              <div class='photo_producteur'><img src="img/producteurs/producteur2.png" alt=""/></div>
              <div class='nom_producteur'>Nicolas B</div>
              </div>
              </div>
              <img class='separator_produit' src="img/separator_b.png" alt=""/>
              </article>
              <img class='separator_produit' src="img/shadow.png" alt=""/> */ ?>
            
            
            
            <?php
            /*Tratement d'ajout des articles aux commandes*/
            
            if (isset($_POST['qte'])) {
                
                $lignecommande = $_POST;
                
                CommandeManager::add($lignecommande);
                
                
              
            }
            
            
            
            
            
            
            
            
            
            
            



           
            /* Si l'utilisateur à cliqué sur une catégorie on recuperere tous les articles de cette catégorie sous forme d'objet */
            if (isset($_GET['cat'])) {
            
            $categorie = htmlspecialchars($_GET['cat']);
            $articles = ArticleManager::getListByCat($categorie);
            
            } else {
                /* Sinon on recuperere tous les articles sous forme d'objet */
                $articles = ArticleManager::getList();
            }

            
            
            
            /* Pour chaque Objet article, on l'affiche sous forme de fiche */
            foreach ($articles as $key => $article) {  
                
                //var_dump($article);

                $ficheArticle = ArticleManager::afficherArticle($article);                
            }
            ?>









        </div>
    </div>
</div>  <!-- Fin du wrapper -->


<?php require_once 'inc/footer.php';  

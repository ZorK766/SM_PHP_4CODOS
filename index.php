<?php 
if(isset($_POST['article_ajax_requete']))
{
    echo $_POST['article_ajax_requete'];
}
else
{
require_once 'inc/header.php'; 

?>  

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


            
            
            <?php
            /*Tratement d'ajout des articles aux commandes*/
            
            if (isset($_POST['qte'])) {
                
                $lignecommande = $_POST;
                
                CommandeManager::add($lignecommande);             
                
            }
            
            
            //Si vider la panier
            if (isset($_GET['effacerpanier'])) {
                if ($_GET['effacerpanier']==1) {
                    CommandeManager::deleteCart();
                }
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


<?php
require_once 'inc/footer.php'; 
}

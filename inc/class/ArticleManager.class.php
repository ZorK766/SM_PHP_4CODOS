<?php

/**
 * Class permettant de gérer la creation, modification, lecture d'un ou plusieurs articles
 * 
 */
class ArticleManager {

    public function __construct() {
        
    }

    /**
     * Function d'ajout d'article
     * @param Article $article
     */
    public function add(Article $article) {

        $pdo = Dbconnect::getInstance();

        $q = $pdo->prepare('INSERT INTO tb_article (codeA, libelleA, descriptionA, qtestockA, prixhtA, photoA, label, code ) '
                . 'VALUES (:codeA, :libelleA, :descriptionA, :qtestockA, :prixhtA, :photoA, :label, :code )');

        $q->bindValue(':codeA', $article->codeA());
        $q->bindValue(':libelleA', $article->libelleA());
        $q->bindValue(':descriptionA', $article->descriptionA());
        $q->bindValue(':qtestockA', $article->qtestockA());
        $q->bindValue(':prixhtA', $article->prixhtA());
        $q->bindValue(':photoA', $article->photoA());
        $q->bindValue(':label', $article->label());
        $q->bindValue(':code', $article->code());

        $q->execute();

        $q->closeCursor();
    }

    /**
     * Function permettant l'effacement d'un article
     * @param Article $Article
     */
    public function delete(Article $Article) {

        $pdo = Dbconnect::getInstance();

        $pdo->exec('DELETE FROM tb_article WHERE codeA = ' . $Article->codeA());
    }

    /**
     * Function permettant d'obtenir les infos d'un article d'aprés son codeA
     * @param string $codeA
     * @return \Article
     */
    public function get($codeA) {

        $pdo = Dbconnect::getInstance();

        $id = (int) $id;

        $q = $pdo->query('SELECT libelleA, descriptionA, qtestockA, prixhtA, photoA, label, code FROM tb_article WHERE codeA = ' . $codeA);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $q->closeCursor();


        return new Article($donnees);
    }

    /**
     * Function retournant sous forme d'objets tous les articles
     * @return \Article
     */
    public static function getList() {

        $pdo = Dbconnect::getInstance();

        $articles = [];

        $q = $pdo->query('SELECT codeA, libelleA, descriptionA, qtestockA, prixhtA, photoA, label, code FROM tb_article ORDER BY libelleA LIMIT 20');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = new Article($donnees);
        }

        return $articles;
    }
    
       /**
     * Function retournant sous forme d'objets tous les articles d'une catégorie
     * @return \Article
     */
    public static function getListByCat($categorie) {

        $pdo = Dbconnect::getInstance();

        $articles = [];
        
        $q = $pdo->query("SELECT appartenir.codeA, appartenir.codeC, tb_article.codeA, libelleA, descriptionA, qtestockA, prixhtA, photoA, label, code FROM tb_article, appartenir WHERE tb_article.codeA = appartenir.codeA AND codeC = '$categorie' ORDER BY libelleA");

        //$q->bindValue(':categorie', $categorie);
        
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = new Article($donnees);
        }

        return $articles;
    }

    /**
     * Function permettant la modification d'un article
     * @param Article $article
     */
    public function update(Article $article) {

        $pdo = Dbconnect::getInstance();

        $q = $pdo->prepare('UPDATE tb_article SET libelleA = :libelleA, descriptionA = :descriptionA, qtestockA = :qtestockA, prixhtA = :prixhtA, photoA = :photoA, label = :label, code = :code '
                . 'WHERE codeA = :codeA');

        $q->bindValue(':codeA', $article->codeA());
        $q->bindValue(':libelleA', $article->userPsswd());
        $q->bindValue(':descriptionA', $article->descriptionA());
        $q->bindValue(':qtestockA', $article->qtestockA());
        $q->bindValue(':prixhtA', $article->prixhtA());
        $q->bindValue(':photoA', $article->photoA());
        $q->bindValue(':label', $article->label());
        $q->bindValue(':code', $article->code());


        $q->execute();

        $q->closeCursor();
    }
    
    /**
     * Function Affichant un article sous forme de fiche depuis son Objet
     * @param Article $article
     * 
     */

    public static function afficherArticle(Article $article) {
        
       // $articleT = new Article;
        
        
        /*object(Article)[3]
      private '_codeA' => string 'BOISSO_ALC_026' (length=14)
      private '_libelleA' => string 'Absynthe' (length=8)
      private '_descriptionA' => string 'Alcool d�natur� par la lois' (length=27)
      private '_qtestockA' => string '95' (length=2)
      private '_prixhtA' => string '21' (length=2)
      private '_photoA' => null
      private '_label' => null
      private '_code' => null*/
        
        $prixTtc = (($article->prixhtA()) * _TVA_20);
        $nomArticle = $article->libelleA();
        $stock = $article->qtestockA();
        $codeA = $article->codeA();
        
        //var_dump($article);

        echo "
            <article>
                <div class='row'>
                    <!-- PRODUIT PARTIE GAUCHE -->
                    <div class='col-lg-4 tal'>
                        <img src='img/produits/kiwis.png' alt=''/>
                        <div class='nom_produit'>$nomArticle</div>
                    </div>
                    <!-- PRODUIT PARTIE CENTRALE -->
                    <div class='col-lg-4 tal'>             
                        <img class='panier' src='img/panier.png' alt=''/>
                        <div class='price'>Prix Unitaire: $prixTtc €</div>
                        <form method='post' action='#'>
                        <input type='hidden' id='codeA' name='codeA' value='$codeA'>
                            <label for='qte' class='qte'>Quantité</label>
                            <select name='qte' id='qte' class='quantite'>";
        
                              /*Boucle pour afficher la quantitee en stock dans le menu deroulant de la quantite */        
                                for ($i=1; $i <=$stock; $i++) {
                                    echo"<option value ='$i'>$i</option>";                                  
                                }                          
                                
                                echo "
                            </select>
                            <button type='submit' class='ajouter_panier'>Ajouter au panier</button>
                        </form>
                       <!-- <div class='origine'>Origine: Sault de Navailles</div>-->
                    </div>
                    <!-- PRODUIT PARTIE DROITE -->
                    <div class='col-lg-4 tal'>
                        <div class='photo_producteur'><img src='img/producteurs/producteur2.png' alt=''/></div>
                        <div class='nom_producteur'>Nicolas B</div>
                    </div>
                </div>
               <!-- <img class='separator_produit' src='img/separator_b.png' alt=''/>-->
            </article>
            <img class='separator_produit' src='img/shadow.png' alt=''/>";
        
       
    }

}

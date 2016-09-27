<?php

/**
 * Class permettant de gérer la creation, modification, lecture des commandes
 * @author TGC * 
 */
class CommandeManager {

    //public $_userToken;

    public function __construct() {
        
    }

    /**
     * Function d'ajout d'article dans la commande
     * @param Commande $commande
     * @author TGC
     */
    public static function add($commande) {



        //On test si l'utilisateur dispose déjà d'un cookie, et on en créé un si besoin        
        if (!(isset($_COOKIE[_COOKIE_NAME]))) {
            $userToken = md5(uniqid(rand(), true)); //Generation d'un Token Unique pour l'utilisateur
            //On enregistre le token dans un cookie
            setcookie(_COOKIE_NAME, $userToken, _COOKIE_TIME, null, null, false, true);
            $pdo = Dbconnect::getInstance();
            $q0 = $pdo->prepare('INSERT INTO tb_commande (tb_commande.codeC) '
                    . 'VALUES (:codeC)');
            $q0->bindValue(':codeC', $userToken);
            $q0->execute();
            $q0->closeCursor();
        } else {
            $userToken = htmlspecialchars($_COOKIE[_COOKIE_NAME]);
        }

        //On stocke la quantitée demandée dans une variable
        $quantiteeDemandee = $commande['qte'];


        //On test si l'article existe déjà dans la commande du client        
        $article = $commande['codeA'];


        $pdo = Dbconnect::getInstance();
        $q = $pdo->query("SELECT qte, codeC, codeA FROM contenir WHERE codeC ='$userToken' AND codeA = '$article'");
        $r = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();

        //Si l'article existe deja dans la commande, on ajoute la nouvelle quantitée.
        if (!null == $r) {
            $quantiteeDemandee += $r['qte'];
        }

        //On cherche le stock disponible pour ce produit.
        $q2 = $pdo->query("SELECT * FROM tb_article WHERE codeA ='$article' ");
        $r2 = $q2->fetch(PDO::FETCH_ASSOC);
        $q2->closeCursor();

        //Si il n'ya pas assez de stock, on informe l'utilisateur
        if ($quantiteeDemandee >= $r2['qtestockA']) {
           ?><script>alert("Il n y a pas assez de stock pour cet article");</script><?php
        }

        //Si l'article n'existait pas déjà dans la commande, on l'ajoute dans la table contenir
        else if (null == $r) {

            //$token=$_COOKIE[_COOKIE_NAME];
            $q3 = $pdo->prepare('INSERT INTO contenir (contenir.qte, contenir.codeA, contenir.codeC ) '
                    . 'VALUES (:qte, :codeA, :cCodeC)');
            $q3->bindValue(':qte', $commande['qte']);
            $q3->bindValue(':codeA', $commande['codeA']);
            $q3->bindValue(':cCodeC', $userToken);

            $q3->execute();
            $q3->closeCursor();
        }

        //Si l'article existait éjà dans ola commande, on met à jour la quantitée dans la table contenir
        else if (!null == $r) {
            $q3 = $pdo->prepare("UPDATE contenir SET contenir.qte =:qte WHERE codeA=:codeA AND codeC=:cCodeC");
            $q3->bindValue(':qte', $quantiteeDemandee);
            $q3->bindValue(':codeA', $commande['codeA']);
            $q3->bindValue(':cCodeC', $userToken);
            $q3->execute();
            $q3->closeCursor();
        }
    }

    /**
     * Function permettant l'effacement du panier
     * 
     * @author TGC
     */
    public static function deleteCart() {
        
        $userToken = htmlspecialchars($_COOKIE[_COOKIE_NAME]);

        $pdo = Dbconnect::getInstance();
        $pdo->exec("DELETE * FROM tb_contenir WHERE codeC = '$userToken'");
        
        echo "Panier éffacé";
       
    }

    /**
     * Function affichant le détail de la commande dans le panier
     * @note: Non testée
     * @author TGC
     */
    public static function getPanier() {

        $token = $_COOKIE[_COOKIE_NAME];
        $prixTotalPanier =0;
        $nbArticlesPanier =0;
        $pdo = Dbconnect::getInstance();

        //On recherche toutes les entrees de la tgable contenir corespondant au Cookie de l'utilisateur
        $q = $pdo->query("SELECT * FROM contenir WHERE codeC='$token'");


        while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
            
            $codeArticle = $r['codeA'];
            $qte = $r['qte'];

            //On va chercher le libelle et le prix corespondant à codeA dans la table Article
            $q2 = $pdo->query("SELECT * FROM tb_article WHERE codeA='$codeArticle'");
            $r2 = $q2->fetch(PDO::FETCH_ASSOC);
            
            $nomArticle = $r2['libelleA'];
            $prixHTArticle = $r2['prixhtA'];
            
            //On créé les objets articles correspondants
            $articles[] = new Article($r2);
            
            $prixArticleTTC = ($qte * $prixHTArticle)*_TVA_20;
            $prixArticleTTCFMT = formatPrice($prixArticleTTC);
            
           
            
            $prixTotalPanier += $prixArticleTTC;
            $prixTotalPanierFMT = formatPrice($prixArticleTTC);
            $nbArticlesPanier += $qte;
            
            echo "<div class='ligne_Panier'>$qte x $nomArticle</div><div class='prix_ligne_panier'>$prixArticleTTCFMT &#8364;</div><br/>";
        }
        
        echo "<div class='prix_total_panier'>Total: $nbArticlesPanier Articles, $prixTotalPanierFMT &#8364; TTC</div>";
       
        
   


        $q->closeCursor();
    }

    /**
     * Function de creation du token unique utilisateur dans la table commande
     * @note A deplacer plus tard dans la classe authentification
     * @note A priori cette function ne sert plus pour l'instant car intégrée dans le add article
     * @author TGC
     */
    public static function createToken() {

        //$userToken = md5(uniqid(rand(), true)); //Generation d'un Token Unique pour l'utilisateur
        //On enregistre le token dans un cookie
        setcookie(_COOKIE_NAME, $userToken, _COOKIE_TIME, null, null, false, true);
        $pdo = Dbconnect::getInstance();
        $q = $pdo->prepare('INSERT INTO tb_commande (tb_commande.codeC) '
                . 'VALUES (:codeC)');
        $q->bindValue(':codeC', $userToken);
        $q->execute();
        $q->closeCursor();
        echo"token creer";
    }

}

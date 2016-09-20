<?php

/**
 * Class permettant de gérer la creation, modification, lecture des commandes
 * @author TGC * 
 */
class CommandeManager {

    public function __construct() {
        
    }

    /**
     * Function d'ajout d'article dans la commande
     * @note Persistance d'un bug lors qu premier cli avant la generation du cookie :(  -> je pense le ressoudre avec un vrai systeme d'authentigfication
     * @param Commande $commande
     * @author TGC
     */
    public static function add($commande) {
        
        //echo "Test du cookie $_COOKIE[_COOKIE_NAME]";

        //On test si l'utilisateur dispose déjà d'un cookie, et on en créé un si besoin        
        if (!(isset($_COOKIE[_COOKIE_NAME]))) {
            echo"appel de create token";
            self::createToken();
        }

        //On stocke la quantitée demandée dans une variable
        $quantiteeDemandee = $commande['qte'];


        //On test si l'article existe déjà dans la commande du client        
        $article = $commande['codeA'];
        $codeCommande = htmlspecialchars($_COOKIE[_COOKIE_NAME]);

        $pdo = Dbconnect::getInstance();
        $q = $pdo->query("SELECT qte, codeC, codeA FROM contenir WHERE codeC ='$codeCommande' AND codeA = '$article'");
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
            echo "<h2>l n'y a pas assez de stock pour cet article</h2>";
        } 
        
        //Si l'article n'existait pas déjà dans la commande, on l'ajoute dans la table contenir
        else if (null == $r) {
            
            $token=$_COOKIE[_COOKIE_NAME];
            $q3 = $pdo->prepare('INSERT INTO contenir (contenir.qte, contenir.codeA, contenir.codeC ) '
                    . 'VALUES (:qte, :codeA, :cCodeC)');
            $q3->bindValue(':qte', $commande['qte']);
            $q3->bindValue(':codeA', $commande['codeA']);
            $q3->bindValue(':cCodeC', $token);

            $q3->execute();
            $q3->closeCursor();            
        } 
        
        //Si l'article existait éjà dans ola commande, on met à jour la quantitée dans la table contenir
        else if (!null == $r) {
            $q3 = $pdo->prepare("UPDATE contenir SET contenir.qte =:qte WHERE codeA=:codeA AND codeC=:cCodeC");
            $q3->bindValue(':qte', $quantiteeDemandee);
            $q3->bindValue(':codeA', $commande['codeA']);
            $q3->bindValue(':cCodeC', $_COOKIE[_COOKIE_NAME]);
            $q3->execute();
            $q3->closeCursor();
        }
    }

    /**
     * Function permettant l'effacement d'une commande
     * @param Commande $Commande
     * @note non Testée
     * @author TGC
     */
    public function delete(Commande $Commande) {

        $pdo = Dbconnect::getInstance();

        $pdo->exec('DELETE FROM tb_commande WHERE codeC = ' . $Commande->codeC());
    }

    /**
     * Function affichant le détail de la commande dans le panier
     * @note: Non testée
     * @author TGC
     */
    public static function getPanier() {

        $token = $_COOKIE[_COOKIE_NAME];

        $pdo = Dbconnect::getInstance();

        $q = $pdo->query("SELECT * contenir WHERE codeC = $token");

        $q->execute();

        $q->closeCursor();
    }

    /**
     * Function de creation du token unique utilisateur dans la table commande
     * @note A deplacer plus tard dans la classe authentification
     * @author TGC
     */
    public static function createToken() {

        $userToken = md5(uniqid(rand(), true)); //Generation d'un Token Unique pour l'utilisateur
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

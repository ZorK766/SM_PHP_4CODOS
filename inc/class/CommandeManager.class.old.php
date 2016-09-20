<?php
/**
 * Class permettant de gérer la creation, modification, lecture des commandes
 * 
 */
class CommandeManager {
    public function __construct() {
        
    }
    /**
     * Function de creation du token unioque utilisateur
     * 
     */
    /**
     * Function d'ajout d'article dans la commande
     * @param Commande $commande
     */
    public static function add($commande) {
        //On test si l'utilisateur dispose déjà d'un cookie, et on en créé un si besoin        
        if (!(isset($_COOKIE[_COOKIE_NAME]))) {
            self::createToken();
        }
        echo //"le cookie est $_COOKIE[_COOKIE_NAME]";
        $quantiteeDemandee = $commande['qte'];
        $pdo = Dbconnect::getInstance();
        //On test si l'article existe déjà dans la commande du client        
        $article = $commande['codeA'];
        //$token = $_COOKIE[_COOKIE_NAME];
        $codeCommande = htmlspecialchars($_COOKIE[_COOKIE_NAME]);
        
        echo $codeCommande;
        echo $article;
        
        
        //SELECT qte, codeC, codeA FROM contenir WHERE codeC = '199613e6306eb4962579aa9575d72905a' AND codeA = 'VIAPOI_VIA_011'
        $q = $pdo->query("SELECT qte, codeC, codeA FROM contenir WHERE codeC ='$codeCommande' AND codeA = '$article'");
        
          $r = $q->fetch(PDO::FETCH_ASSOC);
        $q->closeCursor();
        //Si l'article existe deja dans la commande, on ajoute la nouvelle quantitée.
        if (!null == $r) {
            echo "zrgrgergerg"; var_dump  ($r);
            $quantiteeDemandee += $r['qte'];
        }
        //On cherche le stock disponible pour ce produit.
        $q2 = $pdo->query("SELECT * FROM tb_article WHERE codeA ='$article' ");        
          $r2 = $q2->fetch(PDO::FETCH_ASSOC);
        $q2->closeCursor();
        //Si il n'ya pas assez de stock, on informe l'utilisateur
        if ($quantiteeDemandee >= $r2['qtestockA']) {
            echo "Il n'y a pas assez de stock pour cet article";
        } else  if (null == $r) {
  
            $q3 = $pdo->prepare('INSERT INTO contenir (contenir.qte, contenir.codeA, contenir.codeC ) '
                    . 'VALUES (:qte, :codeA, :cCodeC)');
            $q3->bindValue(':qte', $commande['qte']);
            $q3->bindValue(':codeA', $commande['codeA']);
            $q3->bindValue(':cCodeC', $_COOKIE[_COOKIE_NAME]);
            $q3->execute();
            $q3->closeCursor();
        } else  if (!null == $r) {
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
     */
    public function delete(Commande $Commande) {
        $pdo = Dbconnect::getInstance();
        $pdo->exec('DELETE FROM tb_commande WHERE codeC = ' . $Commande->codeC());
    }
    /**
     * Function affichant le détail d la commande dans le panier
     * @author TGC
     * @note Non Testée
     */
    public static function getPanier() {
        $token = $_COOKIE[_COOKIE_NAME];
        $pdo = Dbconnect::getInstance();
        $q = $pdo->query("SELECT * contenir WHERE codeC = $token");
        $q->execute();
        $q->closeCursor();
    }
    public static function createToken() {
       $userToken = md5(uniqid(rand(), true)); //Generation d'un Token Unique pour l'utilisateur
        //On enregistre le token dans un cookie
        setcookie(_COOKIE_NAME, $userToken, _COOKIE_TIME, null, null, false, true);
        echo _COOKIE_TIME;
        echo _COOKIE_NAME;
        echo $userToken;
        echo "Le set cookie";
        //var_dump($_COOKIE[_COOKIE_NAME]);
        //echo "User Token = $userToken";
        $pdo = Dbconnect::getInstance();
        $q = $pdo->prepare('INSERT INTO tb_commande (tb_commande.codeC) '
                . 'VALUES (:codeC)');
        $q->bindValue(':codeC', $userToken);
        /* $q->bindValue(':dateC', $commande->dateC());
          $q->bindValue(':statutC', $commande->statutC());
          $q->bindValue(':dateretraiC', $commande->dateretraiC());
          $q->bindValue(':heureretraiC', $commande->heureretraiC());
          $q->bindValue(':code', $commande->code());
          $q->bindValue(':qte', $commande['qte']);
          $q->bindValue(':codeA', $commande['codeA']);
          $q->bindValue(':cCodeC', 'test'); */
        $q->execute();
        $q->closeCursor();
    }
}
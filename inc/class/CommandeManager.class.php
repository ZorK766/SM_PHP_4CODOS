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
    public static function createToken() {

        $userToken = md5(uniqid(rand(), true)); //Generation d'un Token Unique pour l'utilisateur
        //On enregistre le token dans un cookie
        setcookie(_COOKIE_NAME, $userToken, _COOKIE_TIME, null, null, false, true);

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

    /**
     * Function d'ajout d'article dans la commande
     * @param Commande $commande
     */
    public static function add($commande) {

        //On test si l'utilsiateur dispose déjà d'un cookie, et on en cré un si besoin

        if (!isset($_COOKIE[_COOKIE_NAME])) {
            self::createToken();
        }
        $token = $_COOKIE[_COOKIE_NAME];

        $quantitéeDemandee = $commande['qte'];




        $pdo = Dbconnect::getInstance();

        //On test si l'article existe déjà dans la commande du client        
        $article = $commande['codeA'];
        $codeCommande = htmlspecialchars($_COOKIE[_COOKIE_NAME]);

        $q = $pdo->query("SELECT * FROM contenir WHERE codeC = $codeCommande AND codeA =$article ");

        if (!null == $q) {
            $quantitéeDemandee += $q['qte'];
        }

        //On cherche le stock disponible pour ce produit.
        $q2 = $pdo->query("SELECT * FROM article WHERE codeA =$article ");


        //i il n'ya pas assez de stock, on informe l'utilisateur
        if ($quantitéeDemandee >= $q['qtestockA']) {

            echo "Il n'y a pas assez de stock pour cet article";
        } else {





            $q3 = $pdo->prepare('INSERT INTO contenir (contenir.qte, contenir.codeA, contenir.codeC ) '
                    . 'VALUES (:qte, :codeA, :cCodeC)');


            $q3->bindValue(':qte', $commande['qte']);
            $q3->bindValue(':codeA', $commande['codeA']);
            $q3->bindValue(':cCodeC', $token);

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
     */
    public static function getPanier() {

        $token = $_COOKIE[_COOKIE_NAME];

        $pdo = Dbconnect::getInstance();

        $q = $pdo->query("SELECT * contenir WHERE codeC = $token");

        $q->execute();

        $q->closeCursor();
    }

}

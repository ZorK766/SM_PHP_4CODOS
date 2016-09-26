<?php

/*
 * Class d'authentification gérant les cookies, tokens et accés
 * NOTE a adapter plus tard aux tables SpeedyMarket car actuellement conçue pour les tables d'un autre projet
 */

class AuthManager {

    
    public static function isCoupleMailPsswdValid($mail, $mdp) {

        $pdo = Dbconnect::getInstance();

        $requete = $pdo->prepare("SELECT code FROM tb_personne
		WHERE
		mail = :userMail AND 
		mdp = :userPsswd");

        $requete->bindValue(':userMail', $userMail);
        $requete->bindValue(':userPsswd', $userPsswd);
        $requete->execute();

        $result = $requete->fetch(PDO::FETCH_ASSOC);

        $requete->closeCursor();

        if ($result) {

            self::createToken($result['id_user']);

            return true;
        } else {
            return false;
        }
    }

   
    public static function getUserInfosByCookie() {

        $token = htmlspecialchars($_COOKIE[_COOKIE_NAME]);

        $db = Dbconnect::getInstance();

        $q = $db->query('SELECT id_user, user_mail, user_psswd, user_token_timeout, user_type FROM tbl_user WHERE user_token = "' . $token . '"AND user_token_timeout > DATE_SUB(NOW(), INTERVAL 7 DAY)');

        $userInfos = $q->fetch(PDO::FETCH_ASSOC);

        $q->closeCursor();

        //On compare la date d'expiration du cookie stockée en bdd à la date actuelle
        if (strtotime($userInfos['user_token_timeout']) > time()) {
            //Si le cookie est encore valide, on retourne les infos utilisateur sous forme de tableau
            return $userInfos;
        } else {
            return null;
        }
    }

    public static function createToken($idUser) {


        $userToken = md5(uniqid(rand(), true)); //Generation d'un Token Unique pour l'utilisateur
        //On enregistre le token dans un cookie
        setcookie(_COOKIE_NAME, $userToken, _COOKIE_TIME, null, null, false, true);


        // On enregistre le token dans la bdd
        $db = Dbconnect::getInstance();
        $q = $db->prepare('UPDATE tbl_user SET user_token = :userToken, user_token_timeout = :userTokenTimeout '
                . 'WHERE id_user = :idUser');

        $q->bindValue(':userToken', $userToken);
        $q->bindValue(':userTokenTimeout', date("Y-m-d H:i:s", _COOKIE_TIME));
        $q->bindValue(':idUser', $idUser, PDO::PARAM_INT);

        $q->execute();

        $q->closeCursor();
    }

    public static function deleteToken() {

        $userInfos = self::getUserInfosByCookie();

        $db = Dbconnect::getInstance();
        $q = $db->prepare('UPDATE tbl_user SET user_token = :userToken, user_token_timeout = :userTokenTimeout WHERE id_user = :idUser');

        $q->bindValue(':userToken', NULL);
        $q->bindValue(':userTokenTimeout', NULL);
        $q->bindValue(':idUser', $userInfos['id_user'], PDO::PARAM_INT);

        $q->execute();

        $q->closeCursor();
    }

}

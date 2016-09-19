<?php

/**
 * Classe implémentant le singleton pour PDO
 * @author TGC
 */
class Dbconnect extends PDO {

    private static $_instance;

    /* Constructeur : héritage public obligatoire par héritage de PDO */

    public function __construct() {
        
    }

    /* Singleton */
    
    /**
     * Retourne une instance unique de PDO
     * @return object PDO
     */

    public static function getInstance() {

        if (!isset(self::$_instance)) {

            // Set options
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                //PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                    //PDO::ATTR_EMULATE_PREPARES,false
            );

            try {

                self::$_instance = new PDO('mysql:host=' . _DB_HOST . ';dbname=' . _DB_NAME.';charset=UTF8' , _DB_USER, _DB_PASS, $options);
            } catch (PDOException $e) {

                trigger_error($e->getMessage(), E_USER_ERROR);
            }
        }
        return self::$_instance;
    }

}

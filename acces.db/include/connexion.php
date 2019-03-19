<?php

/**
 * Fonction de connxion à l'API: PDO
 * Utilisation des commandes definie dans
 * le script infoConnexion.php.
 * constante: visibilité grobal
 * @param aucun
 * @return $cnx objet PDO
 */


function connexion() {
    try{
        $cnx = new PDO('mysql:host='.SRV.';dbname='.DB, USER, PW, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $cnx;
    }catch(PDOEXCEPTION $a) {
        echo 'Erreur de connexion' . $a-> getmessage();
    }
}

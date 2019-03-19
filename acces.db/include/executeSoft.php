<?php
/**
 * Methode (fonction) pour executer une requete
 * simple en l'absence de parametre ou une reqete
 * préfixé dans le cas contraire.
 * @param objet $cnx identifiant connexion PDO
 * @param string $sql La requete SQL
 * @param tableau $parametre Les parametres
 * pour une requete preparer
 * @return objet $resultat identifiant la requete
 */

function executeRequete($cnx, $sql, $parametre = null){
    if ($parametre == null) {
        $resultat = $cnx -> query($sql);
    }else {
        $resultat = $cnx -> prepare($sql);
        $resultat -> execute($parametre);
    }
    return $resultat ;
}

<?php
require_once('../include/connexion.php');
require_once('../include/executeSoft.php');
require_once('../include/infoConnexion.php');

if (isset($_POST['Supprimer'])) {
    $id= $_POST['Supprimer'];
    $cnx = connexion();
    $sql = 'DELETE FROM auteur WHERE id_auteur = ?';
    $idRequete = executeRequete($cnx, $sql, array($id));
    header('Location: ../sProgramme.php');
    exit();
}

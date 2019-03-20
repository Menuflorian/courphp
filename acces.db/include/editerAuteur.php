PDATE<?php
require_once('../include/connexion.php');
require_once('../include/executeSoft.php');
require_once('../include/infoConnexion.php');

if (isset($_POST['id_auteur']) and isset($_POST['modifierNom']) and isset($_POST['modifierPrenom']) and isset($_POST['modifierDateDeNaissance'])) {
    $id= $_POST['id_auteur'];
    $nom= $_POST['modifierNom'];
    $prenom= $_POST['modifierPrenom'];
    $dateDeNaissance= $_POST['modifierDateDeNaissance'];
    $cnx = connexion();
    $sql = 'UPDATE auteur SET nom = ?, prenom=?, date_naissance=? WHERE id_auteur = ?';
    $idRequete = executeRequete($cnx, $sql, array($nom, $prenom, $dateDeNaissance, $id));
    header('Location: ../sProgramme.php');
    exit();
}

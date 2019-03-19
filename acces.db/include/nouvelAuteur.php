<?php
require_once('../include/connexion.php');
require_once('../include/executeSoft.php');
require_once('../include/infoConnexion.php');

if (isset($_POST['nouveauNom']) and isset($_POST['nouveauPrenom']) and isset($_POST['nouveauDateDeNaissance'])) {
    $nom= $_POST['nouveauNom'];
    $prenom= $_POST['nouveauPrenom'];
    $dateDeNaissance= $_POST['nouveauDateDeNaissance'];
    $cnx = connexion();
    $sql = 'INSERT INTO auteur (nom, prenom, date_naissance) VALUE(?,?,?)';
    $idRequete = executeRequete($cnx, $sql, array($nom, $prenom, $dateDeNaissance));
    header('Location: ../sProgramme.php');
    exit();
}

<?php
    require_once('include/connexion.php');
    require_once('include/executeSoft.php');
    require_once('include/infoConnexion.php');
    $cnx = connexion();
    $min = '1700';
    $max = '1799';
    $sql = 'SELECT * FROM auteur WHERE date_naissance BETWEEN ? and ?';
    $idRequete = executeRequete($cnx, $sql, array($min, $max));

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Liste des auteurs</title>
</head>
<body>
    <div class='row'>
        <div class='container'>
            <h1><center> Les auteurs du XVIII's </center><h1>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = $idRequete -> fetch()) {
                                echo '<tr>';
                                echo '<th scope="row">';
                                echo $row['id_auteur'];
                                echo '</th><th scope="row">';
                                echo $row['prenom'];
                                echo '</th><th scope="row">';
                                echo $row['nom'];
                                echo '</th>';
                                echo '<td>';
                                echo '<div class="row justify-content-around">';
                                echo '<form action="include/consulterAuteur.php" method="post">';
                                echo '<input name="Consulter" type="hidden" value ='.$row['id_auteur'] .' > ';
                                echo '<button type="submit" class="btn btn-primary name="Consulter">C</button>';
                                echo '</form>';
                                echo '<form action="include/modifierAuteur.php" method="post">';
                                echo '<input name="Modifier" type="hidden" value ='.$row['id_auteur'] .' > ';
                                echo '<button type="submit" class="btn btn-primary name="Modifier">M</button>';
                                echo '</form>';
                                echo '<form action="include/supprimerAuteur.php" method="post">';
                                echo '<input name="Supprimer" type="hidden" value ='.$row['id_auteur'] .' > ';
                                echo '<button type="submit" class="btn btn-primary name="Supprimer">S</button>';
                                echo '</form>';
                                echo '</div>';
                                echo '</td>';
                                echo '</tr>';
                        }
                    ?>
                </tbody>
                <tfoot>
                </foot>
            </table>
        </div>
    </div>
    <div class="row justify-content-around">
        <?php echo "Le nombre d'enregistrement: " . $idRequete -> rowCount(); ?>
        <form action="include/ajouterAuteur.php" method="post">
            <button type="submit" class="btn btn-primary"  name="Ajouter">Ajouter un auteur</button>
        </form>
    </div>
</body>
</html>

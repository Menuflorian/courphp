<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ma page</title>
</head>
<body>
    <?php
        require_once('db/bibliotheque.php');

        $cnx = connexion();
        echo "<div class='row'><div class='container'>";
        echo "<h3><center> Les auteurs du XVIII's </center><h3></div></div>";
        $min = '1700';
        $max = '2000';
        $sql = 'SELECT * FROM auteur WHERE date_naissance BETWEEN ? and ?';
        $idRequete = executeRequete($cnx, $sql, array($min, $max));

        echo '<div class="row">';
        echo '<div class="container">';
        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Id</th>';
        echo '<th scope="col">Auteur</th>';
        echo '<th scope="col">Nom</th>';
        echo '<th scope="col">Action</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
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
        echo '</tbody>';
        echo '<tfoot>';
        echo '</foot>';
        echo '</table></div></div>';
        echo '<div class="row justify-content-around">';
        echo "Le nombre d'enregistrement: " . $idRequete -> rowCount();
        echo '<form action="include/ajouterAuteur.php" method="post">';
        echo '<button type="submit" class="btn btn-primary"  name="Ajouter">Ajouter un auteur</button>';
        echo '</form>';
        echo '</div>';
    ?>
</body>
</html>

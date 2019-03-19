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
        require_once('include/connexion.php');
        require_once('include/executeSoft.php');
        require_once('include/infoConnexion.php');

        $cnx = connexion();
        echo "<h3> Les auteurs du XVIII's <h3>";
        $min = '1700';
        $max = '1799';
        $sql = 'SELECT * FROM auteur WHERE date_naissance BETWEEN ? and ?';
        $idRequete = executeRequete($cnx, $sql, array($min, $max));

                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Auteur</th>';
                echo '<th>Nom</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo '<tr>';
                    while ($row = $idRequete -> fetch()) {
                        echo '<td>';
                        echo $row['id_auteur'].'/'.$row['prenom']. ' ' ;
                        echo '<hr></td>';
                        echo '<td>';
                        echo $row['nom'];
                        echo '<hr></td>';
                        echo '<td>';
                        echo '<div>';
                        echo '<form class="formulaire1" action="consulterAuteur.php" method="post">';
                            echo '<button type="button" name="Cconsulter">C</button>';
                        echo '</form>';
                        echo '<form class="formulaire2" action="consulterAuteur.php" method="post">';
                            echo '<button type="button" name="Modifier">M</button>';
                            echo '</form>';
                            echo '<form class="formulaire3" action="" method="post">';
                                echo '<button type="button" name="Supprimer">S</button>';
                            echo '</form>';
                        echo '</div>';
                        echo '</td>';
                        echo '</tr>';
                       }
                echo '</tbody>';
                echo '<tfoot>';
                echo '<td>Auteur</td>';
                echo '<td>Nom</td>';
                echo '</tfoot>';
                echo "Le nombre d'enregistrement :" . $idRequete -> rowCount();
                echo '</table>';


         ?>



</body>
</html>

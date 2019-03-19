<?php
require_once('../include/connexion.php');
require_once('../include/executeSoft.php');
require_once('../include/infoConnexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Consulter auteur</title>
</head>
<body>
    <div class="container col-lg-9 flex justify-content-end">
    	<div class="containerfluid">
    		<div class="card">
    			<div class="card-header align-items-center d-flex justify-content-between">
    				<div class="containerfluid">
    					<h3>Consulter un auteur</h3>
                    </div>
                    <div class="containerfluid">
    					<a href="../sProgramme.php" class="btn btn-primary ">Retour à la liste</a>
                    </div>
    			</div>
    			<div class="card-body">
    				<table class="table table-user-information">
    					<tbody>
                            <form action="nouvelAuteur.php" method="post">
                                <tr>
                                    <td><b>Nom:</b></td>
                                    <td>
                                        <input class="form-control" type="text" name="nouveauNom" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Prenom:</b></td>
                                    <td>
                                        <input class="form-control" type="text" name="nouveauPrenom" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Date de naissance:</b></td>
                                    <td>
                                        <input class="form-control" type="number" min="1000" max="2100" name="nouveauDateDeNaissance" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>

                                    <td>
                                        <button type="submit" class="btn btn-primary"  name="nouvelAuteur">Ajouter</button>
                                    </td>
                                </tr>
                            </form>

    					</tbody>
    				</table>
    		     </div>
    		</div>
        </div>
    </div>
</body>
</html>

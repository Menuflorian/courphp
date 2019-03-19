<?php
require_once('../include/connexion.php');
require_once('../include/executeSoft.php');
require_once('../include/infoConnexion.php');

$id= $_POST['Consulter'];
$cnx = connexion();
$sql = 'SELECT * FROM auteur WHERE id_auteur = ?';
$idRequete = executeRequete($cnx, $sql, array($id));
$row = $idRequete -> fetch();
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
    			</div>

    			<div class="card-body">
    				<table class="table table-user-information">
    					<tbody>
    						<tr>
    							<td><b>Name:</b></td>
    							<td><?php echo $row['id_auteur']; ?></td>
    						</tr>
    						<tr>
    							<td><b>Username:</b></td>
    							<td><?php echo $row['prenom']; ?></td>
    						</tr>
    						<tr>
    							<td><b>Register date:</b></td>
    							<td><?php echo $row['date_naissance']; ?></td>
    						</tr>

    					</tbody>
    				</table>
    				<div class="container d-flex justify-content-between">
    					<a href="/admin/admin-edit-profile/<?php $row['id_auteur']; ?>" class="btn btn-primary ">Editer auteur</a>
    					<a href="/admin/admin-change-password/<?php $row['id_auteur']; ?>" class="btn btn-primary ">Supprimer auteur</a>
    				</div>
    			</div>
    		</div>
    		<div><br></div>

</body>
</html>

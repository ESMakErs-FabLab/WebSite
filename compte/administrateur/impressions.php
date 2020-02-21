<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FabLab ESME</title>
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/design.css">
	</head>
	<body>
		
		<nav>
			<a href="">e-Smart LAB</a>
		</nav>

		<div class="menu">
			<a href="../../">Accueil</a>
			<a href="../../projets/">Projets</a>
			<a class="selected">Mon Espace</a>
		</div>

		<div class="undermenu">
			<p></p>
			<p></p>
			<div class="flex-equal undersection">
				<a href="../etudiant/">Etudiant</a>
				<a class="selected">Administrateur</a>
			</div>
		</div>

		<div class="menu width-55">
			<a href="../administrateur/">Profils</a>
			<a class="selected">Impressions 3D</a>
			<a href="projets_etudiants.php">Liste de projets</a>
		</div>

		<div class="mt-50">
			
			<form class="flex width-50 m-auto" autocomplete="off" action="">
				<input class="width-100" type="text" name="recheche" placeholder="Rechercher">
			</form>
			
			<table class="mt-50 mx-auto width-75 text-center">
				<thead>
					<tr>
						<th>FICHIER</th>
						<th>ADRESSE MAIL</th>
						<th>DATE</th>
						<th>STATUT</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						for ($i=0; $i < 20; $i++)
							echo "<tr>
								<td><a href='' download>pièce.stl</a></td>
								<td>nathan.costantini@esme.fr</td>
								<td>20/02/2020</td>
								<td class='text-waiting'>en attente</td>
								<td><a class='btn' target='impression'>voir</a></td>
							</tr>";
					 ?>
				</tbody>
			</table>

		</div>

		<div id="impression" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Impression</h1>
				</div>
				<form action="">
					<div class="modal-body width-60 mx-auto">
						<a class="font-size-24 text-center" href="" download>pièce.stl</a>
						<select class="mt-40" name="statut">
							<option value="">En attente</option>
							<option value="">En cours</option>
							<option value="">Finie</option>
							<option value="">Refusée</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="submit">Modifier</button>
						<button class="cancel" dismiss>Annuler</button>
					</div>
				</form>
			</div>
		</div>

		<script type="text/javascript" src="../../css/modal.js"></script>

	</body>
</html>
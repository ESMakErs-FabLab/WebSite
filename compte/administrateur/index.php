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
			<a class="selected">Profils</a>
			<a href="impressions.php">Impressions 3D</a>
			<a href="projets_etudiants.php">Liste de projets</a>
		</div>

		<div class="mt-50">
			
			<form class="flex width-50 m-auto" autocomplete="off" action="">
				<input class="width-100" type="text" name="recheche" placeholder="Rechercher">
			</form>
			
			<table class="mt-50 mx-auto width-75 text-center">
				<thead>
					<tr>
						<th>NOM</th>
						<th>PRENOM</th>
						<th width="300">ADRESSE MAIL</th>
						<th>FORMATIONS</th>
						<th>STATUT</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						for ($i=0; $i < 20; $i++)
							echo "<tr>
						<td>Nathan</td>
						<td>Costantini</td>
						<td>nathan.costantini@esme.fr</td>
						<td></td>
						<td>Membre</td>
						<td><a href='profil.php'>voir</a></td>
					</tr>";
					 ?>
				</tbody>
			</table>

		</div>

		<div id="profil" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Modifier le profil</h1>
				</div>
				<form action="">
					<div class="modal-body width-60 mx-auto">
						<table>
							<tbody>
								<tr>
									<th>Nom</th>
									<td>Costantini</td>
								</tr>
								<tr>
									<th>Prénom</th>
									<td>Nathan</td>
								</tr>
								<tr>
									<th>Adresse mail</th>
									<td>nathan.costantini@esme.fr</td>
								</tr>
								<tr>
									<th>Statut</th>
									<td><select name="statut" >
										<option value="membre">Membre</option>
										<option value="admin">Administrateur</option>
										<option value="moderateur">Moderateur</option>
									</select></td>
								</tr>
							</tbody>
						</table>						
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
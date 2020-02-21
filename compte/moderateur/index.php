<!DOCTYPE html>
<html>
	<head>
		<title>FabLab ESME</title>
		<meta charset="utf-8">
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
			<a href="../administrateur/impressions.php">Impressions 3D</a>
			<a class="selected">Liste de projets</a>
		</div>

		<div class="undermenu width-55">
			<p></p>
			<p></p>
			<div class="flex-equal undersection">
				<a href="../administrateur/projets_etudiants.php">Etudiant</a>
				<a class="selected">Entreprise</a>
			</div>
		</div>

		<div class="mt-50">

			<form class="flex width-50 m-auto" autocomplete="off" action="">
				<input class="width-100" type="text" name="recherche" placeholder="Rechercher">
			</form>

			<ul class="list width-75">
				<?php 
					for ($i=0; $i < 10; $i++)
						echo "<li width-100>
							<a target='modifier'>
								<img src='../../image/image.jpg' width='200'>
								<form>
									<div class='flex-equal'>
										<h1>Titre</h1>
										<p class='text-right text-waiting'>en traitement</p>
									</div>
									<p>Nom de l'entreprise</p>
									<p>Description:</p>
									<p class='description'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam facere necessitatibus suscipit dolorum voluptatibus aliquam minima expedita facilis quidem unde.</p>
								</form>
							</a>
						</li>";
				 ?>
			</ul>

		</div>

		<div class="page mt-20">
			<ul>
				<li><a href=""><</a></li>
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">...</a></li>
				<li><a href="">10</a></li>
				<li><a href="">></a></li>
			</ul>
		</div>

		<div id="modifier" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Projet</h1>
				</div>
				<form action="">
					<div class="modal-body width-60 mx-auto">
						<a class="font-size-24 text-center" href="" download>Projet.pdf</a>
						<input class="mt-20" type="text" name="statut" placeholder="en traitement" required>
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
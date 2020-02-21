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
			<a href="">FabLab</a>
		</nav>

		<div class="menu">
			<a href="../../">Accueil</a>
			<a href="../../projets/">Projets</a>
			<a class="selected">Mon Espace</a>
		</div>

		<div class="width-75 mx-auto mt-50">

			<div class="panel">

				<a class='btn text-center font-size-30' target='projet'>Ajouter un projet</a>
				
				<!-- <ul class="grid mx-auto">
					<?php 
						for ($i=0; $i < 10; $i++)
							echo "<li>
									<a class='btn titre' target='modifier'>Titre</a>
									<img class='mt-5' src='../../image/image.jpg' alt=''>
								</li>";
					 ?>

					 <li class="flex"><a class='btn text-center font-size-20' target='projet'>Ajouter <br/> un projet</a></li>
				</ul> -->
			</div>
		</div>

		<div id="projet" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Nouveau projet</h1>
				</div>
				<form action="">
					<div class="modal-body width-60 mx-auto">
						<input type="text" name="titre" placeholder="Titre" required>
						<input class="mt-40" type="file" name="image" accept="image/png,image/jpeg">
						<input class="mt-40" type="file" name="file" accept="application/pdf" required>
						<input class="mt-40" type="text" name="description" placeholder="Description" required>
					</div>
					<div class="modal-footer">
						<button type="submit">Ajouter</button>
						<button class="cancel" dismiss>Annuler</button>
					</div>
				</form>
			</div>
		</div>

		<div id="modifier" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Modifier projet</h1>
				</div>
				<form action="">
					<div class="modal-body width-60 mx-auto">
						<input type="text" name="titre" placeholder="Titre" required>
						<input class="mt-40" type="file" name="image" accept="image/png,image/jpeg">
						<input class="mt-40" type="file" name="file" accept="application/pdf" required>
						<input class="mt-40" type="text" name="description" placeholder="Description" required>
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
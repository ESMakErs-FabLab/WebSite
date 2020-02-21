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
				<a class="selected">Etudiant</a>
				<a href="../administrateur">Administrateur</a>
			</div>
		</div>

		<div class="menu width-55">
			<a href="../etudiant/">Mes projets</a>
			<a href="impressions.php">Impression 3D</a>
			<a class="selected">Mon profil</a>
		</div>

		<div class="flex-equal width-75 mx-auto mt-100">

			<div class="flex-vertical">
				<h2 class="text-center">Mes formations</h2>
				<div class="main-grid mt-20">
					<img src="../../image/imprimante3D.png" width="75">
					<img src="../../image/imprimante3D.png" width="75">
					<img src="../../image/imprimante3D.png" width="75">
					<img src="../../image/imprimante3D.png" width="75">
				</div>
				<button class="style-input width-50 mx-auto mt-20" target="formations">Faire une formation</button>
			</div>

			<div class="width-40 mx-auto flex-vertical align-self">
				<table class="mx-auto">
					<tbody>
						<tr>
							<td class="p-10 fs-18">Adresse mail</td>
							<td class="p-10">nathan.costantini@esme.fr</td>
						</tr>
						<tr>
							<td class="p-10 fs-18">Mot de passe</td>
							<td class="p-10">************</td>
						</tr>
					</tbody>
				</table>
				<button class="style-input width-60 mx-auto" target="profil">Modifier</button>
			</div>

		</div>

		<div id="formations" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="text-center">Formations</h2>
				</div>
				<div class="modal-body">
					<div class="main-grid">
						<img src="../../image/imprimante3D.png" width="75" alt="">
						<img src="../../image/imprimante3D.png" width="75" alt="">
						<img src="../../image/imprimante3D.png" width="75" alt="">
						<img src="../../image/imprimante3D.png" width="75" alt="">
						<img src="../../image/imprimante3D.png" width="75" alt="">
						<img src="../../image/imprimante3D.png" width="75" alt="">
					</div>
				</div>
				<div class="modal-footer">
					<button dismiss>Annuler</button>
				</div>
			</div>
		</div>

		<div id="profil" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="text-center">Profil</h1>
				</div>
				<form action="">
					<div class="modal-body width-60 mx-auto">
						<input type="email" name="email" placeholder="nathan.costantini@esme.fr" required>
						<input class="mt-40" type="password" name="password" placeholder="Mot de passe" required>
						<input class="mt-40" type="password" name="passwordConfirmed" placeholder="Confirmation du mot de passe" required>
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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FabLab ESME</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/design.css">
	</head>
	<body>
		
		<nav>
			<a href="">e-Smart LAB</a>
		</nav>

		<div class="menu">
			<a href="../">Accueil</a>
			<a href="../projets/">Projets</a>
			<a class="selected">Mon Espace</a>
		</div>

		<div class="menu width-50">
			<a class="selected">Etudiant</a>
			<a href="inscription_entreprise.php">Entreprise</a>
		</div>

		<div class="form mt-55">
			<h1>Inscription</h1>

			<form action="">
				<input class="mt-20" type="text" name="prenom" placeholder="Prénom" required>
				<input class="mt-20" type="text" name="Nom" placeholder="Nom" required>
				<input class="mt-20" type="email" name="email" placeholder="Adresse Mail" required>
				<input class="mt-20" type="password" name="password" placeholder="Mot de passe" required>
				<input class="mt-20" type="password" name="passwordConfirmation" placeholder="Confirmation du mot de passe" required>
				<a class="mt-30" href="../compte/">J'ai déjà un compte !</a>
				<input class="mt-20" type="submit" name="submit">				
			</form>
		</div>

	</body>
</html>
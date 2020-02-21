<!DOCTYPE html>
<html>
	<head>
		<title>FabLab ESME</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/design.css">
	</head>
	<body>
		
		<nav>
			<a href="">e-Smart LAB</a>
		</nav>

		<div class="menu">
			<a href="../index.php">Accueil</a>
			<a class="selected">Projets</a>
			<a href="../compte/">Mon Espace</a>
		</div>

		<div class="mt-50">

			<form class="flex width-50 m-auto" autocomplete="off" action="">
				<input class="width-100" type="text" name="recherche" placeholder="Rechercher">
			</form>

			<ul class="list width-75">
				<?php 
					for ($i=0; $i < 10; $i++)
						echo "<li width-100>
							<a href='projet.pdf' target='_blank'>
								<img src='../image/image.jpg' width='200'>
								<form>
									<h1>Titre</h1>
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

	</body>
</html>
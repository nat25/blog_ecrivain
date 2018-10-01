<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width" />
		<title><?= $title; ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
		<link rel="stylesheet" type="text/css" href="public/css/frontend.css">
	</head>
	<body>
		
		<header>			
			<div class="topnav">
				<h1>Billet simple pour l'Alaska</h1>
			</div>
			<nav class="menu">				
				<a href="#">Accueil</a>
				<a href="#">A propos</a>
				<a href="#">Table des matières</a>
				<a href="#">Contact</a>
			</nav>
		</header>
		
		<?= $content; ?>

		<footer>
			<div class="social_networks">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-pinterest-square"></i>
			</div>
			<p>&copy; Copyright Jean Forteroche, 2018</p>
			<a href="#">Administration</a>
		</footer>

	</body>
</html>
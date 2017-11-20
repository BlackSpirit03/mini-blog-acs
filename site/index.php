<?php
	//Ouvrir la session
	session_start();

	//Connexion base de données (bdd_miniblog / admin_miniblog / Ten96wabuQ10sztU)
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=bdd_miniblog', 'root', '');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}

	//Affichage de la page nécessaire
	if (empty($_GET["page"])){
		require_once "./controllers/userauth.php";
	}else{
		if ($_GET['page'] == 'articleslist') {
				require_once "./controllers/articleslist.php";
			}
	}
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Accueil du Blog</title>
			<meta charset="utf-8">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		</head>
		<body>
			<main>
				<ul class="nav nav-tabs">
				  <li role="presentation" class="active"><a href="#">Catégories</a></li>
				  <li role="presentation"><a href="#">Connexion</a></li>
				</ul>
			</main>
			
		</body>
	</html>






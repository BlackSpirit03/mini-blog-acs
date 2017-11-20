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
	    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<style type="text/css" src="./css/style.css"></style>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>



		<body>
			<main>
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				       <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégories <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Sports</a></li>
				            <li><a href="#">Photos</a></li>
				            <li><a href="#">Cuisines</a></li>
				            <li><a href="#">High-Tech</a></li>
				          </ul>
				        </li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">

				       <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				    	<a role="button" class="navbar-brand" href="#">Connexion</a>
				    </div>

				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</main>

			<section class="articles">
				<section id="article">
		       		<img src="./img/photopardefaut.jpg"><br><br>
		            <figcaption>Coucher de Soleil</figcaption>
		            <i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size:24px"></i>
				</section>

				<section id="article">
		       		<img src="./img/photopardefaut.jpg"><br><br>
		            <figcaption>Coucher de Soleil</figcaption>
		           	<i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size:24px"></i>
				</section>


			</section>

		</body>
	</html>






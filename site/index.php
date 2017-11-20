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
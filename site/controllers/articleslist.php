<?php
	//Inclure les Class nécessaires
	include "./methods/ClassUserQuery.php";
	include "./methods/ClassUser.php";

	//
	$usersquery = new ClassUserQuery($bdd);
	$user = $usersquery->getUser($_POST['user'], $_POST['mdp']);

	//Test si 1 Auteur est connecté
	if($user){
		$_SESSION['id'] = $user->getId();
		require_once "./methods/mails.php";
		$liste_mails = listedesmails($bdd);
		require_once "./views/articleslist.php";
	}
?>
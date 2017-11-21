<?php
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);

try{
		$bdd = new PDO('mysql:host=localhost;dbname=bdd_miniblog', 'root', '');
	}
catch (Exception $e)
{
	die('Erreur :'.$e->getMessage());	
}
	$reponse= $bdd->prepare("SELECT * FROM t_auteurs where email= ? and password= ?");
	$reponse->execute(array($_POST["email"], 
		md5($_POST["password"])));

	$donnees=$reponse->fetch();

$_SESSION['log']= $email;
if ($donnees){
			echo "Vous etes connecté";
			header('location:../index.php?page=articleslist');
			exit();
	}
	else{
		echo "Vous n'avez pas reussi a vous connecté";
	}

?>
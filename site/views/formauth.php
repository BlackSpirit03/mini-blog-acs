<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulaire de Connexion</h1>
	<form method="post" action="../controllers/userauth.php">

		<p>Entrez votre Mail</p>
		<input type="email" name="email" id="email"/>
		 
		<p>Entrez votre Mot de passe</p>
		<input type="password" name="password" id="password"/>

		<br><br><br>

		<input type="submit" />

		<a href="../index.php"><button type="button">retour</button></a>
	</form>

</body>
</html>
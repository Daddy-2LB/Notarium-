<!DOCTYPE html>
<html>
<head>
	<title>Création de la table information clients</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Espace membres Notarium</h1>
	<?php

	$servername = 'localhost';
	$dbname = 'clients_notarium';
	$username = 'root';
	$password = '';

	try {
		
		$dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

		$dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql = "CREATE TABLE nouveau_dossier(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, Nom VARCHAR(50) NOT NULL, Phone CHAR(10) NOT NULL, Email VARCHAR(50) NOT NULL, TypeDossier VARCHAR(50) NOT NULL, NotaireChoisi VARCHAR(50)NOT NULL, DateInscription TIMESTAMP)";

		$dbco->exec($sql);

		echo 'Table bien créee';

	}

	catch (PDOException $e) {

		echo "Erreur:" . $e->getMessage();
		
	}

	?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Création de la base de données</title>
<meta charset="utf-8">
</head>
<body>
	<h1>Espace membres Notarium</h1>
	<?php 

		$servername = 'localhost';
		$username = 'root';
		$password = '';

		try {
			
			$dbco = new PDO("mysql:host=$servername",$username,$password);

			$dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql= "CREATE DATABASE clients_notarium";

			$dbco->exec($sql);

			echo 'la base de données Clients de notarium bien crée !';

		} 

		catch(PDOException $e) {
			echo "Erreure : " . $e->getMessage();
			
		}
	?>

</body>
</html>
<?php
		

	$hostname = "localhost";	//ou vs-wamp
	$base= "utilisateur";
	$loginBD= "root";
	$passBD="";
	
	try {
		
		$bdd = "mysql:server=$hostname ; dbname=$base";
		
		$pdo = new PDO ($bdd, $loginBD, $passBD,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		// Le dernier argument sert à ce que toutes les chaines de caractères 
		// en entrée et sortie de MySql soit dans le codage UTF-8
		
		// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
	catch (PDOException $e) {
		// affiche (en UTF8) le message d'erreur associé à l'exception
		echo utf8_encode("Echec de connexion : " . $e->getMessage() . "\n");
		die(); // On arrête tout.
	}




?>
<?php 
	
function inscription_BD($prenom,$nom,$email,$mdp){ 
	require ("connect.php") ; 
	
	$reponse = $pdo->prepare('INSERT INTO compte(prenom,nom,email,mot_de_passe) VALUES(?,?,?,?)');
	$reponse->execute(array($prenom,$nom,$email,$mdp));
}


?>

<?php 
	
function inscription_BD($prenom,$nom,$email,$mdp){ 
	require ("connect.php") ; 

	$reponse = $pdo->prepare('SELECT email, mot_de_passe FROM compte WHERE email=? AND mot_de_passe=?');
    $reponse->execute(array($email,$mdp));
    $donnees = $reponse->fetch();
    if(!empty($donnees)){
        return false;
    }
    else{
		$reponse = $pdo->prepare('INSERT INTO compte(prenom,nom,email,mot_de_passe) VALUES(?,?,?,?)');
		$reponse->execute(array($prenom,$nom,$email,$mdp));
        return true;
    }
		
}


?>

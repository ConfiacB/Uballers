<?php 

function accueil() {
	require ("./vue/inscription.html");
}

function inscription() {
	require ('./modele/inscriptionBD.php');
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$mdp = $_POST['nouveauMdp'];

	// Verification supplementaire
	if(!empty($prenom) AND !empty($nom) AND !empty($email) AND !empty($mdp)){
		inscription_BD($prenom,$nom,$email,$mdp);
		$_SESSION['prenom'] = $prenom;
		$_SESSION['nom'] = $nom;
		require ('./vue/home.html');
	}
	
}

function connexion() {
	require ('./modele/connexionBD.php');
	$login = $_POST['login'];
	$password = $_POST['password'];

	// Verification
	if(!empty($login) AND !empty($password) AND connexion_BD($login,$password)){
		$_SESSION['prenom'] = recupPrenom($login,$password);
		$_SESSION['nom'] = recupNom($login,$password);
		require ('./vue/home.html');
	}
}


?>
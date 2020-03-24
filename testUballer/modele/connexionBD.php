<?php 
	
function connexion_BD($login,$password){ 
	require ("connect.php") ; 
	
    $reponse = $pdo->prepare('SELECT email, mot_de_passe FROM compte WHERE email=? AND mot_de_passe=?');
    $reponse->execute(array($login,$password));
    $donnees = $reponse->fetch();
    if(!empty($donnees)){
        return true;
    }
    else{
        return false;
    }
    
}

function recupPrenom($login,$password){
    require ("connect.php") ; 
    $reponse = $pdo->prepare('SELECT prenom FROM compte WHERE email=? AND mot_de_passe=?');
    $reponse->execute(array($login,$password));
    $donnees = $reponse->fetch();
    if(!empty($donnees)){
        return $donnees;
    }
}
function recupNom($login,$password){
    require ("connect.php") ; 
    $reponse = $pdo->prepare('SELECT nom FROM compte WHERE email=? AND mot_de_passe=?');
    $reponse->execute(array($login,$password));
    $donnees = $reponse->fetch();
    if(!empty($donnees)){
        return $donnees;
    }
}


?>
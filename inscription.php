<?php
require_once('credentials.php');

$pseudo = $_POST['Pseudo'];
$mdp = $_POST['MDP'];
if (isset($pseudo) && $pseudo != "" && isset($mdp) && $mdp != "") {
	$dbh = new PDO('mysql:host=localhost:3306 ; dbname=idle_shadok', $user , $pass);
	$sql = "insert into Players (pseudo, mdp) values (:pseudo, :mdp)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':pseudo', $pseudo);
	$query->bindParam(':mdp', $mdp);
	$query->execute();
	header('profil.php?mess="Inscription réussie !"');
} else {
	header('index.php?mess="Inscription ratée !"');	
}



?>
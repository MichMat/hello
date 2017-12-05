<?php
//phpinfo();
require_once('credentials.php');


if (isset($_POST['Pseudo']) && $_POST['Pseudo'] != "" && isset($_POST['MDP']) && $_POST['MDP'] != "" && $_POST['MDP'] == $_POST['RMDP']) {
	
	$pseudo = $_POST['Pseudo'];
	$mdp = $_POST['MDP'];
	$dbh = new PDO('mysql:host=localhost:3306 ; dbname=idle_shadok', $user , $pass);
	$query = $dbh->prepare('select count(*) as nb from Players where pseudo = "'.$pseudo.'"');
	$res = $query->execute();

	if (($res->fetch())['nb'] == 0) {

		$sql = "insert into Players (pseudo, mdp) values (:pseudo, :mdp)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pseudo', $pseudo);
		$query->bindParam(':mdp', $mdp);
		$query->execute();
		header('Location: profil.php?mess=success');
	} else {
		header('Location: index.php?mess=existe');	
	}
} else {
	header('Location: index.php?mess=error');	
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Idle shadok </title>
	<link rel="stylesheet" href="style/shadok.css" />
</head>
<body>
<form action="controller.php" method="POST">
	<fieldset>
	<label>Pseudo : <br></label>
	<input type="text" name="nom" required="true">
	<br>
	<label>Mot de passe : <br></label>
	<br>
	<input type="text" name="MDP" required="true">
	<br>
	<input type="submit" name="Jouer" value="Jouer">
	</fieldset>
</form>
<form action="inscription.php" method="POST"><fieldset>
	<label>S'inscrire<br></label>
	<label>Pseudo<br></label>
	<input type="text" name="Pseudo" required="true">
	<br>
	<label>Mot de passe : <br></label>
	<br>
	<input type="text" name="MDP" required="true">
	<br>
	<label>Retapez votre mot de passe : <br></label>
	<br>
	<input type="text" name="RMDP" required="true">
	<br>
	<input type="submit" name="S'inscrire" value="S'inscrire">
	</fieldset>
</form>
</body>
</html>

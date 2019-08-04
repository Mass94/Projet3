<?php
//var_dump($_POST);
class classetraitement{ 

include 'mesfonction.php';
$fonction = new mesfonction();

if (isset($_POST["connexion"])) 
{
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];

	if(verifieUSer($login, $mdp)){
		if($_SESSION["CURRENT_USER"]["type"] == "ADMIN")
			header("Location: index_admin.php");
		else {
			if($_SESSION["CURRENT_USER"]["statut"] == true)
				header("Location: index_user.php");
			else echo "inscription non validee";
		}

	} else echo "il faut s'inscrire";
}

if (isset($_POST["inscription"]))
 {
	$nom = $_POST['nom'];
	$prenom = $_POST["prenom"];
	$mail = $_POST["mail"];
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];

	if(saveUser($nom, $prenom, $mail, $login, $mdp))
		header("Location: connexion.php");

	else  echo "echec";

}

if (isset($_POST["valider"])) {
	
	validerUser($_POST["id"]);
}
}
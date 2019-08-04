<?php
class mesfoncton{
include "..controller/basedonnee.php";
public function verifieUser($login, $mdp)
{
	$return = false;
	if(!is_null($bd)){
		$sql = "SELECT * from users where login=:login and mdp=:mdp";
		$element = $bd->prepare($sql);
		$element->execute(array(
			":login" => $login,
			":mdp" => $mdp
		));
		$result = $element->fetch(PDO::FETCH_ASSOC);//fetchAll = l'ensemble des enregistrement de notre base de données
		$nb_ligne = $element->rowCount();//compte ligne par ligne

		if($nb_ligne>0) {
			session_start();
			$_SESSION["CURRENT_USER"] = $result;
			$return=true; 
		}
		
	}
	return $return;

}

public function saveUser($nom, $prenom, $mail, $login, $mdp)
{
	$result = false;
	if(!is_null($bd)){
	
		$sql = "INSERT into users(nom, prenom, email, login, mdp) VALUES(:nom, :prenom, :email, :login, :mdp)";

		$element = $bd->prepare($sql);	
		$result = $element->execute(array(
			":nom" => $nom,
			":prenom" => $prenom,
			":email" => $mail,
			":login" => $login,
			":mdp" => $mdp,
		));
	}
	
	return $result;
}
public function validerUser($id)
{
	if (!is_null($bd)) {
		$req = "UPDATE users set statut=true where id=?";
		$el = $bd->prepare($req);
		$el->execute(array($id));
	}
}
public function getAll($table_name)
{
       	$req="SELECT * from ".$table_name;
       	$int=$this->getDB()->query($req);

       	return $int->fetchAll();
       }
}
?>
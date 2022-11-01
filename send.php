<?php

require_once 'db.php';

$db = DataBase::getDB();

//$sth = $db->query("SELECT * FROM ajax");

if(!empty($_POST['nom']) && !empty($_POST['message'])){

	$nom = strip_tags($_POST['nom']);
	$message = strip_tags($_POST['message']);
	
	//Ecriture requête
	$sql = 'INSERT INTO `ajax`(`nom`, `message`) VALUES (:nom, :message)';
	
	//Préparation 
	$query = $db->prepare($sql);
	
	//Injection des valeurs
	$query->bindValue(':nom', $nom, PDO::PARAM_STR);
	$query->bindValue(':message', $message, PDO::PARAM_STR);
	
	//On exécute la requête
	$query->execute();
	
	echo "<span class='success'>Vos données ont été enregistrées</span>";
/* Récupération de toutes les lignes d'un jeu de résultats */
/*print("Récupération de toutes les lignes d'un jeu de résultats :\n");
$result = $sth->fetchAll();*/
/*print_r($result);*/}else{
	echo "<span class='error'>Veuillez compléter tous les champs</span>";
}


?>

<?php
/**
 * Classe basique qui permet de générer une connexion à la base données
 * Les identifiants de connexion sont stockés dans des constantes
 * La fonction getDB() est une fonction statique, ainsi elle peut être appelée sans instancier la classe
 * Cette class n'a pas vocation à être instanciée, elle sert simplement à renvoyer un objet PDO elle est donc abstraite
 */
abstract class DataBase {

  const HOST  = "localhost";
  const NAME = "ajax";
  const LOGIN = "root";
  const PASSWORD = "";

  static public function getDB() {
    try {
      $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::NAME , self::LOGIN, self::PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);	
		
		
      return $db;
    } catch (PDOException $e) {
      exit($e->getMessage());
    }
  }

}
?>
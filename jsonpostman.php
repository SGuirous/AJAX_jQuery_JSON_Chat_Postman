<?php

require_once 'db.php';

$pdo = DataBase::getDB();


       
$stmt = $pdo->prepare("SELECT * FROM ajax");

       $data = [];
        if($stmt->execute()){
          while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
                $data['messages'] = $row;
            }
          }
    
    if($_SERVER['REQUEST_METHOD'] === 'GET' )
		if(!empty($data)){
			header("Access-Control-Allow-Origin: *");
			header('Content-Type: application/json; charset=UTF-8');
			header('Access-Control-Allow-Methods: GET');
			header('Access-Control-Max-Age: 3600');
			header('Acees-Control-Allow-Headers: Content-Type, Access-Control-Headers, Authorization, X-Requested-With');

			echo json_encode($data);
		}else{
		  echo 'error';
		}
	else{
		http_reponse_code(405);
		echo json_encode(['message' => 'Not a valid method']);
	}



?>
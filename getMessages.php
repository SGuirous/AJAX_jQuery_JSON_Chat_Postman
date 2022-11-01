<?php

require_once 'db.php';

$db = DataBase::getDB();

$messages = [];

//setlocale(LC_TIME, 'fr_FR');
//date_default_timezone_set('Europe/Paris');


$date = null;


$sth = $db->query("SELECT * FROM ajax ORDER by id DESC limit 10");

$messages = $sth->fetchAll(PDO::FETCH_ASSOC);
//$jsonmessages['messages'] = [];
//$jsonmessages['messages'] = $messages;
//print_r($jsonmessages);	
//json_encode($jsonmessages);
//echo json_encode($jsonmessages);
//die();
foreach($messages as $message){
	
	$date = strtotime($message['created_at']);
	
	
	?>
	

	<h4><?php echo $message['nom'] .' le ' . date('d/m/Y à H:i:s', $date) .' : ' ?></h4>
	<p><?php echo $message['message'] ?></p>
	<hr/>
	
	<?php
}
?>
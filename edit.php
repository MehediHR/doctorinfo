
<?php
session_start();
require_once('config.php');


$id = $_POST['id'];

$sql = "SELECT * FROM info WHERE id = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$id]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		echo json_encode($user);
		
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}
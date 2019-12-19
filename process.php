<?php
require_once('config.php');
if(isset($_POST)){

	$usrname 	= $_POST['usrname'];
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$pass 		= $_POST['pass'];

		$sql = "INSERT INTO registion (user_id, f_name, email, pass ) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$usrname, $name, $email, $pass]);
		if($result){
			echo 'Successfully saved.';
		}
        else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}

?>

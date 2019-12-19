<?php
session_start();
require_once('config.php');

if(isset($_POST)){
$pas1 = $_POST['pas1'];
$pas2 = $_POST['pas2'];
$pas3 = $_POST['pas3'];
$id   = $_SESSION['userlogin'];
    
    
$sql = "SELECT pass FROM registion WHERE user_id = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$id]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		
		$pas = $user['pass'];
	}
}
    
if($pas1==$pas){
    
    if($pas2==$pas3){
    $sql = "Update registion set pass = ? WHERE user_id = ?";
    $stmtselect  = $db->prepare($sql);
    $result = $stmtselect->execute([$pas2,$id]);
        
        header("Location: main.php?num=Password Change successfully!!");
        
    }
    else{
        header("Location: main.php?num=Password not match!!");
        
       
    }
} else{
    header("Location: main.php?num=Worng Password!!");
}
}
?>

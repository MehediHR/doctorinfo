<?php
require_once('config.php');
$username = $_POST['id'];
$sql = "DELETE FROM info WHERE id=? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username]);
if($result){
    echo 'Delete Succesfully!!';
}
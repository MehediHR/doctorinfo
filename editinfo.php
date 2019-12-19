<?php
session_start();
require_once('config.php');
if(isset($_POST)){
    
    $uid    = $_POST['id'];
	$fname 	= $_POST['fname'];
    $lname 	= $_POST['lname'];
    $quli 	= $_POST['quli'];
    $desi 	= $_POST['desi'];
    $expe 	= $_POST['expe'];
    $orga 	= $_POST['orga'];
    $cham 	= $_POST['cham'];
    $loca 	= $_POST['loca'];
    $divi 	= $_POST['divi'];
    $ph1 	= $_POST['ph1'];
    $ph2 	= $_POST['ph2'];
    $ph3 	= $_POST['ph3'];
    $fileNameNew = $_POST['img'];
    
  if(!(isset($_FILES['file'])=='')){  
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 500000) {
				$fileNameNew = $uid.uniqid().".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
                header("Location: main.php?num=Your file is too big!");
			}
		} else {
            header("Location: main.php?num=There was an error uploading your file!");
		}
	} else {
        header("Location: main.php?num=You cannot upload files of this type!");
	}
    

    }
		$sql = "UPDATE info SET f_name=?, l_name=?, quali=?, desi=?, expe=?, organ=?, cham=?, loca=?, divis=?, ph1=?, ph2=?, ph3=?, img=? WHERE id=?";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([ $fname, $lname,$quli,$desi,$expe,$orga,$cham,$loca,$divi,$ph1,$ph2,$ph2, $fileNameNew,$uid]);
		if($result){
            header("Location: main.php?num=Successfully saved.");
		}
        else{
            header("Location: main.php?num=There were erros while saving the data.");
		}
}else{
    header("Location: main.php?num=No data");
}

?>


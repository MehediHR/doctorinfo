<?php
require_once('config.php');
$output = '';
if(isset($_POST["query"]))
{
	$search = $_POST["query"];
    $sql = "SELECT * FROM info WHERE f_name LIKE '%".$search."%'
	OR l_name LIKE '%".$search."%' 
	OR divis LIKE '%".$search."%' 
	OR expe LIKE '%".$search."%' 
	OR organ LIKE '%".$search."%'
    OR loca LIKE '%".$search."%'
    OR cham LIKE '%".$search."%'";
}
else
{
    $sql = "SELECT * FROM info";
}


$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([]);


if($result > 0)
{
    while ($user = $stmtselect->fetch(PDO::FETCH_ASSOC)) {
    
	$output .= '<div class="container mt-3 p-5">

                    <div class=" d-md-flex justify-content-start">
                        <div class="avatar mb-md-0 mb-4 mx-4">
                            <img class="rounded z-depth-1 gona" src="uploads/'.$user["img"].'" />


                        </div>
                        <div class="mx-4">
                            <strong class="h4">'.$user["f_name"].' '.$user["l_name"].'</strong><br />
                            <p>Qualification : '.$user["quali"].'<br />
                                Designation : '.$user["desi"].'<br />
                                Expertise : '.$user["expe"].'<br />
                                Organization: '.$user["organ"].'<br />
                                Chamber: '.$user["cham"].'<br />
                                Location: '.$user["loca"].'<br />
                                Phone: '.$user["ph1"].' '.$user["ph2"].' '.$user["ph3"].'</p>
                        </div>
                    </div>
                </div>
                <hr />';
    }
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>




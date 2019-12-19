<?php 
require_once('config.php');
session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

$id = $_SESSION['userlogin'];
$sql = "SELECT f_name FROM registion WHERE user_id = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$id]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		
		$name = $user['f_name'];
	}
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/first-aid-kit.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/my.css">

    <title><?php echo $id;?></title>
</head>

<body>



    <nav class="navbar navbar-light bg-light">
        <div class="container">

            <h1 class="navbar-brand">Welcome <?php echo $name;?></h1>

            <span class="navbar-text">
                <a id="log" href="logout.php"><i class="fas fa-power-off"></i> Logout</a>
            </span>
        </div>
    </nav>

    <div class="mt-1" style="color: #ff9171; text-align: center;"><?php if(isset($_GET['num'])){echo $_GET['num'];}?></div>


    <div class="tab">

        <ul class="tabs">
            <li><a href="#">Update info</a></li>
            <li><a href="#">Modification</a></li>
            <li><a href="#">Change Password</a></li>
        </ul> <!-- / tabs -->



        <div class="tab_content">

            <div class="tabs_item">

                <form class="container" action="maininfo.php" method="post" enctype="multipart/form-data" autocomplete="off">

                    <div class="form-group row">
                        <label for="inputFirstname" class="col-sm-2 col-form-label">First name:</label>
                        <div class="col-sm-10">
                            <input name="fname" type="text" class="form-control" id="inputFirstname" placeholder="First name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputLaststname" class="col-sm-2 col-form-label">Last name:</label>
                        <div class="col-sm-10">
                            <input name="lname" type="text" class="form-control" id="inputLaststname" placeholder="Last name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputQualification" class="col-sm-2 col-form-label">Qualification:</label>
                        <div class="col-sm-10">
                            <input name="quli" type="text" class="form-control" id="inputQualification" placeholder="Qualification" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDesignation" class="col-sm-2 col-form-label">Designation:</label>
                        <div class="col-sm-10">
                            <input name="desi" type="text" class="form-control" id="inputDesignation" placeholder="Designation" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputExpertise" class="col-sm-2 col-form-label">Expertise:</label>
                        <div class="col-sm-10">
                            <input name="expe" type="text" class="form-control" id="inputExpertise" placeholder="Expertise" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputOrganization" class="col-sm-2 col-form-label">Organization:</label>
                        <div class="col-sm-10">
                            <input name="orga" type="text" class="form-control" id="inputOrganization" placeholder="Organization" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputChamber" class="col-sm-2 col-form-label">Chamber:</label>
                        <div class="col-sm-10">
                            <input name="cham" type="text" class="form-control" id="inputChamber" placeholder="Chamber">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputLocation" class="col-sm-2 col-form-label">Location:</label>
                        <div class="col-sm-10">
                            <input name="loca" type="text" class="form-control" id="inputLocation" placeholder="Location" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputDivison" class="col-sm-2 col-form-label">Divison:</label>
                        <div class="col-sm-10">
                            <input name="divi" type="text" class="form-control" id="inputDivison" placeholder="Divison" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPhone" class="col-sm-3 mt-2 col-form-label">Phone:</label>
                        <div class="col-sm-3 mt-2">
                            <input name="ph1" type="text" class="form-control" id="inputPhone" placeholder="Phone" required>
                        </div>
                        <div class="col-sm-3 mt-2">
                            <input name="ph2" type="text" class="form-control" id="inputPhone" placeholder="Phone">
                        </div>
                        <div class="col-sm-3 mt-2">
                            <input name="ph3" type="text" class="form-control" id="inputPhone" placeholder="Phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Picture:</label>
                        <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button name="submit" style="background-color:#87D3B7; border:none;" type="submit" class="col btn btn-info mt-2 mb-5">Save Information</button>
                </form>


            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <?php
require_once('config.php');
$id = $_SESSION['userlogin'];
$sql = "SELECT * FROM info WHERE user_id = ?";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$id]);

if($result){

while ($user = $stmtselect->fetch(PDO::FETCH_ASSOC)) {?>

                <div class="container mt-3 p-5">
                    <div class="float-right">
                        <div class="btn-group mb-2" role="group" aria-label="Basic example">
                            <input type="button" name="edit" value="Edit" id="<?php echo $user['id'];?>" class="btn btn-secondary btn-xs edit" />
                            <input type="button" name="delete" value="Delete" id="<?php echo $user['id'];?>" class="btn btn-secondary btn-xs delete" />

                        </div>
                    </div>
                    <div class=" d-md-flex justify-content-start">
                        <div class="avatar mb-md-0 mb-4 mx-4">
                            <img class="rounded z-depth-1 gona" src="uploads/<?php echo $user['img'];?>" />


                        </div>
                        <div class="mx-4">
                            <strong class="h4"><?php echo $user['f_name']." ".$user['l_name'];?></strong><br />
                            <p>Qualification : <?php echo $user['quali'];?><br />
                                Designation : <?php echo $user['desi'];?><br />
                                Expertise : <?php echo $user['expe'];?><br />
                                Organization: <?php echo $user['organ'];?><br />
                                Chamber: <?php echo $user['cham'];?><br />
                                Location: <?php echo $user['loca'];?><br />
                                Phone: <?php echo $user['ph1'].", ".$user['ph2'].", ".$user['ph3'];?></p>
                        </div>
                    </div>
                </div>
                <hr />

                <?php } }?>

                <p style="text-align: center; color: #E5E5E5">End Result</p>

            </div> <!-- / tabs_item -->

            <div class="tabs_item">
                <div class="container">
                    <form action="changepas.php" method="post">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Current Password:</label>
                            <div class="col-sm-10">
                                <input name="pas1" type="password" class="form-control" id="inputPassword1" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">New Password:</label>
                            <div class="col-sm-10">
                                <input name="pas2" type="password" class="form-control" id="inputPassword2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password:</label>
                            <div class="col-sm-10">
                                <input name="pas3" type="password" class="form-control" id="inputPassword3" required>
                            </div>
                        </div>
                        <button id="update" style="background-color:#87D3B7; border:none;" type="submit" class="col btn btn-info mt-2 mb-5">Save Password</button>
                    </form>
                </div>
            </div> <!-- / tabs_item -->

        </div> <!-- / tab_content -->
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="container" action="editinfo.php" method="post" enctype="multipart/form-data" autocomplete="off">
                        <input name="id" id="id" type="hidden" />
                        <input name="img" id="img" type="hidden" />
                        <div class="form-group row">
                            <label for="inputFirstname" class="col-sm-12 col-form-label">First name:</label>
                            <div class="col-sm-12">
                                <input name="fname" type="text" class="form-control" id="Firstname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputLaststname" class="col-sm-12 col-form-label">Last name:</label>
                            <div class="col-sm-12">
                                <input name="lname" type="text" class="form-control" id="Laststname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputQualification" class="col-sm-12 col-form-label">Qualification:</label>
                            <div class="col-sm-12">
                                <input name="quli" type="text" class="form-control" id="Qualification">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDesignation" class="col-sm-12 col-form-label">Designation:</label>
                            <div class="col-sm-12">
                                <input name="desi" type="text" class="form-control" id="Designation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputExpertise" class="col-sm-12 col-form-label">Expertise:</label>
                            <div class="col-sm-12">
                                <input name="expe" type="text" class="form-control" id="Expertise">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputOrganization" class="col-sm-12 col-form-label">Organization:</label>
                            <div class="col-sm-12">
                                <input name="orga" type="text" class="form-control" id="Organization">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputChamber" class="col-sm-12 col-form-label">Chamber:</label>
                            <div class="col-sm-12">
                                <input name="cham" type="text" class="form-control" id="Chamber">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputLocation" class="col-sm-12 col-form-label">Location:</label>
                            <div class="col-sm-12">
                                <input name="loca" type="text" class="form-control" id="Location">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDivison" class="col-sm-12 col-form-label">Divison:</label>
                            <div class="col-sm-12">
                                <input name="divi" type="text" class="form-control" id="Divison">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-12 mt-2 col-form-label">Phone:</label>
                            <div class="col-sm-12 mt-2">
                                <input name="ph1" type="text" class="form-control" id="Phone1">
                            </div>
                            <div class="col-sm-12 mt-2">
                                <input name="ph2" type="text" class="form-control" id="Phone2">
                            </div>
                            <div class="col-sm-12 mt-2">
                                <input name="ph3" type="text" class="form-control" id="Phone3">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Picture:</label>
                            <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>


                        <hr />
                        <div class="float-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">Save</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <script src="js/swif.js"></script>


    <script>
        $(document).on('click', '.edit', function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "edit.php",
                method: "POST",
                data: {
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    $('#id').val(data.id);
                    $('#img').val(data.img);
                    $('#Firstname').val(data.f_name);
                    $('#Laststname').val(data.l_name);
                    $('#Qualification').val(data.quali);
                    $('#Designation').val(data.desi);
                    $('#Expertise').val(data.expe);
                    $('#Organization').val(data.organ);
                    $('#Chamber').val(data.cham);
                    $('#Location').val(data.loca);
                    $('#Divison').val(data.divis);
                    $('#Phone1').val(data.ph1);
                    $('#Phone2').val(data.ph2);
                    $('#Phone3').val(data.ph3);

                    $('#exampleModal').modal('show');
                }
            });
        });
        $(document).on('click', '.delete', function() {
            var id = $(this).attr("id");
            $.ajax({
                url: "delet.php",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    if (data) {
                        Swal.fire({
                            'title': 'Successful',
                            'text': data,
                            'type': 'success',
                            confirmButtonText: 'Ok'
                        }).then(Ok => {
                            if (Ok) {
                                window.location.href = "main.php?num=Delete Succesfully!!";
                            }
                        });

                    }

                }
            });
        });

    </script>

</body>

</html>

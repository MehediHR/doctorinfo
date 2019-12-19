<?php
require_once('config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/first-aid-kit.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/login.css">

    <title>Registration</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #486C87;">
        <div class="container">
            <a class="navbar-brand" href="index.php">DoctorInfo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item mr-3 active">
                        <a class="nav-link cool-link" href="regi.php">Registration</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="limiter">
        <div class="container-login100 mt-5">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" action="process.php" method="post" autocomplete="on">
                    <span class="login100-form-title p-b-33">
                        Account Registration
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input id="usrname" class="input100" type="text" name="usrname" placeholder="User ID" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="name" class="input100" type="text" name="name" placeholder="Full Name" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input id="email" class="input100" type="email" name="email" placeholder="Email" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input">
                        <input id="pass" class="input100" type="password" name="pass" placeholder="Password" required>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>


                    <div class="container-login100-form-btn m-t-20">
                        <button id="register" class="login100-form-btn" type="submit">
                            Registration
                        </button>
                    </div>
                    <div class="text-center m-t-20">
                        <span class="txt1">
                            Already have an account?
                        </span>

                        <a href="login.php" class="txt2 hov1">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swif.js"></script>


    <script type="text/javascript">
        $(function() {
            $('#register').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {


                    var usrname = $('#usrname').val();
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var pass = $('#pass').val();


                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {
                            usrname: usrname,
                            name: name,
                            email: email,
                            pass: pass
                        },
                        success: function(data) {
                            if (data == 'Successfully saved.') {
                                Swal.fire({
                                    'title': 'Successful',
                                    'text': data,
                                    'type': 'success',
                                    confirmButtonText: 'Ok'
                                }).then(Ok => {
                                    if (Ok) {
                                        window.location.href = "login.php";
                                    }
                                });

                            } else {
                                Swal.fire({
                                    'title': 'Errors',
                                    'text': 'This username already used.',
                                    'type': 'error'
                                })
                            }

                        },
                    });

                } else {

                }

            });

        });

    </script>

</body>

</html>

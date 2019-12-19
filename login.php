<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: main.php");
	}


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

    <title>Login</title>
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


                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="regi.php">Registration</a>
                    </li>
                    <li class="nav-item mr-3 active">
                        <a class="nav-link cool-link " href="login.php">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>




    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-33">
                        Account Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="username" class="input100" type="username" name="username" placeholder="Username">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input id="password" class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <button id="login" type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>


                    <div class="text-center m-t-20">
                        <span class="txt1">
                            Create an account?
                        </span>

                        <a href="regi.php" class="txt2 hov1">
                            Registration
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
            $('#login').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {
                    var username = $('#username').val();
                    var password = $('#password').val();
                }

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'jslogin.php',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        if ($.trim(data) === "1") {
                            setTimeout(' window.location.href =  "main.php"', 500);
                        } else {
                            Swal.fire({
                                'title': 'Errors',
                                'text': data,
                                'type': 'error'
                            })
                        }
                    },
                    error: function(data) {
                        Swal.fire({
                            'title': 'Errors',
                            'text': 'there were erros while doing the operation.',
                            'type': 'error'
                        })

                    }
                });

            });
        });

    </script>
</body>

</html>
